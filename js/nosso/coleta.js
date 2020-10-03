var data;
$(document).ready(function(){
	$('#divCadMap').hide();
	$('#msgErroFront').hide();
	$('#nomeColeta, #endereco, #cep, #lat, #lng').keypress(function(event){
		var keycode = (event.keyCode ? event.keyCode : event.which);
		if(keycode == '13'){
			registrarPonto();
		}
	});

	getLocais();


	if(window.location.href.indexOf('historia-do-tabaco') == -1 &&
    window.location.href.indexOf('login') == -1 &&
	window.location.href.indexOf('lista-de-pontos') == -1 &&
	window.location.href.indexOf('pdv-ativos') == -1){

		$("#cep").mask("99999-999");
		$("#cnpj").mask("99.999.999/9999-99");
		$("#telColeta, #telListaPontos, #telContatoLoja").mask("(00) 000000000");
	}
	
	$("#ufMapa, #cidadeMapa, #tipoPontoMapa").on("change", function(){
		filtrarListaMapa();
	});

	$('#cep').on('blur', function(){
		var lat = '';
		var lng = '';
		var address = $('#cep').val().replace(/[^0-9]/, "");
		var geocoder = new google.maps.Geocoder();

		if(address.length != 8){
			return false;
		}
		geocoder.geocode( { 'address': address}, function(results, status) {
			if (status == google.maps.GeocoderStatus.OK){
				$('#lat').val(results[0].geometry.location.lat());
				$('#lng').val(results[0].geometry.location.lng());
			}
		});
		

		var url = "https://viacep.com.br/ws/"+address+"/json/";
		

		$.getJSON(url, function(dadosRetorno){
			try{
				// Preenche os campos de acordo com o retorno da pesquisa
				$("#endereco").val(dadosRetorno.logradouro);
				$("#bairro").val(dadosRetorno.bairro);
				$("#cidade").val(dadosRetorno.localidade);
				$("#uf").val(dadosRetorno.uf);
			}catch(ex){}
		});
	});

	if(window.location.href.indexOf('edit-pdv') > 0){
		data = JSON.parse(localStorage.getItem('data'));
		console.log(data[0]);
		data[0].ponto_aprovado == "1" ? $('#ponto_aprovado').prop('checked', true)  : $('#ponto_aprovado').prop('checked', false);
		$('#nome').val(data[0].nome_loja);
		$('#cnpj').val(data[0].cnpj);
		$('#telContatoLoja').val(data[0].telContatoLoja);
		$('#cep').val(MascaraCep(data[0].cep));
		$('#endereco').val(data[0].endereco);
		$('#complemento').val(data[0].complemento);
		$('#bairro').val(data[0].bairro);
		$('#uf').val(data[0].estado);
		$("#cidade").val(data[0].cidade);
		$('#tipoPonto').val(data[0].tipoPonto); 
		$('#site').val(data[0].site);
		$('#email').val(data[0].email);
		$('#tipoRedeSocial').val(data[0].tipoRedeSocial);
		$('#nomeRedeSocial').val(data[0].nomeRedeSocial);
		data[0].delivery == "1" ? $('#delivery').prop('checked', true) : $('#delivery').prop('checked', false);
		data[0].venda_online == "1" ? $('#vendaOnline').prop('checked', true)  : $('#vendaOnline').prop('checked', false);
		$('#lat').val(data[0].lat); 
		$('#lng').val(data[0].lng);
	}

	$('#definirMapa').on('change', function(e){
		let mapa = $('#definirMapa'); 
		if(mapa.is(':checked')){
			$('#divCadMap').show();
		}else{
			$('#divCadMap').hide();
		}
	});

});

function valorLat(){
	const lat = $('#lat').val();
	const mapaLat = $('#mapaLat').val();
	const definiMapa = $('#definirMapa').is(':checked');
	if(definiMapa && mapaLat != undefined && mapaLat != ""){
		return mapaLat;
	}else{
		return lat;
	}
}

function valorLng(){
	const lng = $('#lng').val();
	const mapaLng = $('#mapaLng').val();
	const definiMapa = $('#definirMapa').is(':checked');
	if(definiMapa && mapaLng != undefined && mapaLng != ""){
		return mapaLng;
	}else{
		return lng;
	}
}

function registrarPonto(){
	var nome = $('#nome').val();
	var cnpj = $('#cnpj').val();
	var telContatoLoja = $('#telContatoLoja').val();
    var cep = $('#cep').val();
	var endereco = $('#endereco').val();
	var complemento = $('#complemento').val();
	var bairro = $('#bairro').val();
	var uf = $('#uf').val();
	var cidade = $("#cidade").val();
    var tipoPonto = $('#tipoPonto').val(); 
	var site = $('#site').val();
	var email = $('#email').val();
	var tipoRedeSocial = $('#tipoRedeSocial').val();
	var nomeRedeSocial = $('#nomeRedeSocial').val();
	var delivery = $('#delivery').is(':checked') == true ? 1 : 0;
	var vendaOnline = $('#vendaOnline').is(':checked') == true ? 1 : 0;
	var lat = valorLat();
	var lng = valorLng();

	if(!verificarCamposPonto(nome, cnpj, telContatoLoja, cep, endereco, complemento, bairro, uf, cidade, tipoPonto, site, email, delivery, vendaOnline, lat, lng, tipoRedeSocial, nomeRedeSocial)){
		return false;
	}else{
		
		// cep = $("#cep").val().replace('-', '');

		$.ajax({
			url:"php/cad-marcador",
			method: "POST",
			data: {
                ponto: 1,
				nome_loja: nome,
				cnpj: cnpj,
				endereco:endereco + (complemento != "" ? ", " + complemento : ""),
				bairro: bairro,
				estado: uf,
                lat:lat,
                lng:lng,
				tipoPonto: tipoPonto,
				site: site,
				email: email,
				cep: cep,
				telefone_loja: telContatoLoja,
				delivery: delivery,
				venda_online: vendaOnline,
				ponto_aprovado: 0,
				cidade: cidade,
				tipoRedeSocial: tipoRedeSocial,
				nomeRedeSocial: nomeRedeSocial
			},
			success :  function(response){						
				if(response.indexOf('success') >= 0){
					// confirmacaoCadastroColeta();
					$('#msgErroFront').hide();
					$('#msgSucessoCad').css('display', 'block');
					$('html, body').animate({
						scrollTop: 0
					  }, 600);
					limparCampos();
				}else{
					$('#msgErroFront').html("Erro interno no servidor");
					$('#msgErroFront').show();
				}
			},
			error: function(response){
				$('#msgErroFront').html("Erro interno no servidor");
				$('#msgErroFront').show();				
			},
			dataType: 'text'
		})
	}

	return false;
}

function verificarCamposPonto(nome, cnpj, telContatoLoja, cep, endereco, complemento, bairro, uf, cidade, tipoPonto, site, email, delivery, vendaOnline, lat, lng, tipoRedeSocial, nomeRedeSocial){
	if(nome == "" || nome == null){
		$('#msgErroFront').html('Campo nome vázio!');
		$('#msgErroFront').show();
		return false;
	}else if(cep == "" || cep == null){
		$('#msgErroFront').html('Informa o cep!');
		$('#msgErroFront').show();
		return false;
	}else if(endereco == "" || endereco == null){
		$('#msgErroFront').html('Campo endereço vázio!');
		$('#msgErroFront').show();
		return false;
	}else if(bairro == "" || bairro == null){
		$('#msgErroFront').html('Informe o bairro!');
		$('#msgErroFront').show();
		return false;
	}else if(uf == "" || uf == null){
		$('#msgErroFront').html('Informe a UF!');
		$('#msgErroFront').show();
		return false;
	}else if(cidade == "" || cidade == null){
		$('#msgErroFront').html('Informe a cidade!');
		$('#msgErroFront').show();
		return false;
	}else if(tipoPonto == "" || tipoPonto == null){
		$('#msgErroFront').html('Informa o tipo de ponto!');
		$('#msgErroFront').show();
		return false;
	}else if(tipoRedeSocial == null &&  nomeRedeSocial != ""){
		$('#msgErroFront').html('Coloque o tipo de rede social.');
		$('#msgErroFront').show();
		return false;
	}else if(tipoRedeSocial != null && nomeRedeSocial == ""){
		$('#msgErroFront').html('Coloque o @ da rede social.');
		$('#msgErroFront').show();
		return false;
	}
	return true;
}

function isLatitude(lat) {
	return isFinite(lat) && Math.abs(lat) <= 90;
  }
  
  function isLongitude(lng) {
	return isFinite(lng) && Math.abs(lng) <= 180;
  }

function confirmacaoCadastroColeta() {
	let modalAppend = `<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Confirmação</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <span style="font-weight: bold;">Cadastro de ponto de coleta realizado com sucesso</span>
                </div>
                    <div class="modal-footer">
                        <a style="text-decoration: none; color: #fff;" class="btn btn-primary" onclick="redirecionarMapa()" >Fechar</a>
                    </div>
                </div>
            </div>
		</div>`
		$('body').append(modalAppend);
		$("#exampleModalLong").modal();
}

function redirecionarMapa(){
	window.location = 'maps';
}

function limparCampos(){
	$('#nome').val('');
	$('#nmContatoLoja').val('');
	$('#telContatoLoja').val('');
    $('#cep').val('');
	$('#endereco').val('');
	$('#complemento').val('');
	$('#bairro').val('');
	$('#uf').val('estado');
	$("#cidade").val('');
    $('#tipoPonto').val('tipoPonto'); 
	$('#site').val('');
	$('#email').val('');
	$('#delivery').prop('checked', false);
	$('#vendaOnline').prop('checked', false);
    $('#lat').val(''); 
	$('#lng').val('');
	$('#nomeRedeSocial').val('');
	$('#tipoRedeSocial').val('tipoRedeSocial');
	$('#cnpj').val('');
}

function editarLocal(id){
	$.ajax({
		url:"php/buscar-marcador",
		method: "POST",
		data: { id: id },
		success :  function(response){						
			if(response.indexOf('empty') == -1){

				localStorage.removeItem('data');
				localStorage.setItem('data', JSON.stringify(response));
				window.location = 'edit-pdv';
			}else{
				$('#msgErroFront').html(response);
				$('#msgErroFront').show();
			}
		},
		error: function(response){
			$('#msgErroFront').html("Erro interno no servidor");
			$('#msgErroFront').show();				
		},
		dataType:"json"
	});
}

function editarMarcador(){
	var id = data[0].id;
	var nome = $('#nome').val();
	var cnpj = $('#cnpj').val();
	var telContatoLoja = $('#telContatoLoja').val();
    var cep = $('#cep').val();
	var endereco = $('#endereco').val();
	var complemento = $('#complemento').val();
	var bairro = $('#bairro').val();
	var uf = $('#uf').val();
	var cidade = $("#cidade").val();
    var tipoPonto = $('#tipoPonto').val(); 
	var site = $('#site').val();
	var email = $('#email').val();
	var tipoRedeSocial = $('#tipoRedeSocial').val();
	var nomeRedeSocial = $('#nomeRedeSocial').val();
	var delivery = $('#delivery').is(':checked') == true ? 1 : 0;
	var vendaOnline = $('#vendaOnline').is(':checked') == true ? 1 : 0;
	// var lat = $('#lat').val(); 
	var lat = valorLat();
	// var lng = $('#lng').val();
	var lng = valorLng();
	var ponto_aprovado = $('#ponto_aprovado').is(':checked') == true ? 1 : 0;

	if(!verificarCamposPonto(nome, cnpj, telContatoLoja, cep, endereco, complemento, bairro, uf, cidade, tipoPonto, site, email, delivery, vendaOnline, lat, lng, tipoRedeSocial, nomeRedeSocial)){
		return false;
	}else{
		
		// cep = $("#cep").val().replace('-', '');

		$.ajax({
			url:"php/editar-marcador",
			method: "POST",
			data: {
				id: id,
                ponto: 1,
				nome_loja: nome,
				cnpj: cnpj,
				endereco:endereco + (complemento != "" ? ", " + complemento : ""),
				bairro: bairro,
				estado: uf,
                lat:lat,
                lng:lng,
				tipoPonto: tipoPonto,
				site: site,
				email: email,
				cep: cep,
				telefone_loja: telContatoLoja,
				delivery: delivery,
				venda_online: vendaOnline,
				ponto_aprovado: ponto_aprovado,
				cidade: cidade,
				tipoRedeSocial: tipoRedeSocial,
				nomeRedeSocial: nomeRedeSocial
			},
			success :  function(response){						
				if(response.indexOf('success') >= 0){
					console.log("deu certo carai");
					confirmacaoEdicaoColeta();
					limparCampos()
				}else{
					$('#msgErroFront').html("Erro interno no servidor");
					$('#msgErroFront').show();
				}
			},
			error: function(response){
				$('#msgErroFront').html("Erro interno no servidor");
				$('#msgErroFront').show();				
			},
			dataType: 'text'
		})
	}

	return false;
}

function confirmacaoEdicaoColeta() {
	let modalAppend = `<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Confirmação</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <span style="font-weight: bold;">Edição de PDV realizado com sucesso</span>
                </div>
                    <div class="modal-footer">
                        <a style="text-decoration: none; color: #fff;" class="btn btn-primary" onclick="redirecionar()" >Fechar</a>
                    </div>
                </div>
            </div>
		</div>`
		$('body').append(modalAppend);
		$("#exampleModalLong").modal();
}

function redirecionar(){
	window.location = 'lista-de-pontos';
}

function ExcluirMarcador(id){
	$.ajax({
		url:"php/excluir-marcador",
		method: "POST",
		data: { id: id },
		success :  function(response){						
			if(response.statusCode == 200){
				location.reload();
			}else{
				$('#msgErroFront').html(response);
				$('#msgErroFront').show();
			}
		},
		error: function(response){
			$('#msgErroFront').html("Erro interno no servidor");
			$('#msgErroFront').show();				
		},
		dataType:"json"
	});
}

function confirmacaoExclusaoPDV(id) {
	$('#exampleModalLong').remove();
	let modalAppend = `<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Confirmação</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <span style="font-weight: bold;">Deseja excluir o PDV?</span>
				</div>
					<div class="modal-footer">
                        <a style="text-decoration: none; color: #fff;" class="btn btn-danger" onclick="ExcluirMarcador(${id})" > Confirmar </a>
                        <a style="text-decoration: none; color: #fff;" class="btn btn-primary" data-dismiss="modal">Fechar</a>
                    </div>
                </div>
            </div>
		</div>`
		$('body').append(modalAppend);
		$("#exampleModalLong").modal();
}

function confirmacaoAprovacaoPDV(id) {
	$('#exampleModalLong').remove();
	let modalAppend = `<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Confirmação</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <span style="font-weight: bold;">Deseja Aprovar esse PDV?</span>
				</div>
					<div class="modal-footer">
                        <a style="text-decoration: none; color: #fff;" class="btn btn-success" onclick="aprovarPdv(${id}, ${'1'})" > Confirmar </a>
                        <a style="text-decoration: none; color: #fff;" class="btn btn-primary" data-dismiss="modal">Fechar</a>
                    </div>
                </div>
            </div>
		</div>`
		$('body').append(modalAppend);
		$("#exampleModalLong").modal();
}

function aprovarPdv(id, booleanAprova){
	$.ajax({
		url:"php/aprovar-ponto",
		method: "POST",
		data: {
			id: id,
			ponto_aprovado: booleanAprova
		},
		success :  function(response){	
			console.log(response);		
			if(response.indexOf("success") > -1){
				location.reload();
			}else{
				$('#msgErroFront').html(response);
				$('#msgErroFront').show();
			}
		},
		error: function(response){
			console.log(response);
			$('#msgErroFront').html("Erro interno no servidor");
			$('#msgErroFront').show();				
		},
		// dataType:"json"
	});
}

function viasualizarPdv(id) {
	$.ajax({
		url:"php/buscar-marcador",
		method: "POST",
		data: { id: id },
		success :  function(response){
			$('#modalVisualizarPdv').remove();
			let modalAppend = "<div class='modal fade' id='modalVisualizarPdv' tabindex='-1' role='dialog' aria-labelledby='visualizarPdvTitle' aria-hidden='true'>"+
				"<div class='modal-dialog' role='document'>"+
					"<div class='modal-content'>"+
					"<div class='modal-header'>"+
						"<h5 class='modal-title' id='visualizarPdvTitle'>Visualizar PDV</h5>"+
						"<button type='button' class='close' data-dismiss='modal' aria-label='Close'>"+
						"<span aria-hidden='true'>&times;</span>"+
						"</button>"+
					"</div>"+
					"<div class='modal-body'>"+
						"<div class='row'>"+
							"<div class='col-md-12'>"+
								"<label>Nome:&nbsp;</label>" +response[0].nome_loja +
							"</div>"+
						"</div>"+
						"<div class='row'>"+
							"<div class='col-md-12'>"+
								"<label>CNPJ:&nbsp;</label>" + (response[0].cnpj != "" ? response[0].cnpj : "Não foi cadastrado") +
							"</div>"+
						"</div>"+
						"<div class='row'>"+
							"<div class='col-md-12'>"+
								"<label>Endereço:&nbsp;</label>"+ response[0].endereco + ", " + response[0].bairro +
							"</div>"+
						"</div>"+
						"<div class='row'>"+
							"<div class='col-md-12'>"+
								"<label>Cidade:&nbsp;</label>" + response[0].cidade + ", " + response[0].estado +
							"</div>"+
						"</div>"+
						"<div class='row'>"+
							"<div class='col-md-12'>"+
								"<label>Tipo de PDV:&nbsp;</label>"+ response[0].tipoPonto +
							"</div>"+
						"</div>"+
						"<div class='row'>"+
							"<div class='col-md-12'>"+
								"<label>Site:&nbsp;</label>"+ (response[0].site != "" ? response[0].site : "Não foi cadastrado") +
							"</div>"+
						"</div>"+
						"<div class='row'>"+
							"<div class='col-md-12'>"+
								"<label>E-mail:&nbsp;</label>"+ (response[0].email != "" ? response[0].email : "Não foi cadastrado") +
							"</div>"+
						"</div>"+
						"<div class='row'>"+
							"<div class='col-md-12'>"+
								"<label>CEP:&nbsp;</label>"+ MascaraCep(response[0].cep) +
							"</div>"+
						"</div>"+
						"<div class='row'>"+
							"<div class='col-md-12'>"+
								"<label>Telefone:&nbsp;</label>"+ (response[0].telefone_loja != "" ? response[0].telefone_loja : "Não foi cadastrado") +
							"</div>"+
						"</div>"+
						"<div class='row'>"+
							"<div class='col-md-12'>"+
								"<label>Delivery:&nbsp;</label>"+ (response[0].delivery == "1" ? "Sim" : "Não") +
							"</div>"+
						"</div>"+
						"<div class='row'>"+
							"<div class='col-md-12'>"+
								"<label>Venda online:&nbsp;</label>"+ (response[0].venda_online == "1" ? "Sim" : "Não") +
							"</div>"+
						"</div>"+
						"<div class='row'>"+
							"<div class='col-md-12'>"+
								"<label>Rede social:&nbsp;</label>"+ (response[0].tipoRedeSocial != "" ? response[0].tipoRedeSocial + " - " + response[0].nomeRedeSocial : "Não foi cadastrado") +
							"</div>"+
						"</div>"+
					"</div>"+
						"<div class='modal-footer'>"+
							(response[0].ponto_aprovado == "0" ?
								"<a style='text-decoration: none; color: #fff;' class='btn btn-success' onclick='aprovarPdv("+id+", "+1+")' > Aprovar </a>"
							: "")+
							"<a style='text-decoration: none; color: #fff;' class='btn btn-primary' data-dismiss='modal' aria-label='Close'>Fechar</a>"+
						"</div>"+
					"</div>"+
				"</div>"+
			"</div>";
			$('body').append(modalAppend);
			$("#modalVisualizarPdv").modal();
		},
		error: function(response){
			$('#msgErroFront').html("Erro interno no servidor");
			$('#msgErroFront').show();				
		},
		dataType:"json"
	});
	
}

function getLocais(){
	$.ajax({
		url:"php/buscar-locais",
		type: 'get',
		dataType: 'JSON',
		beforeSend: function(){
			loaderMaps();
		  },
		complete: function(){
			$('#loaderMaps').remove();
		},
		success :  function(response){		
			if(response.constructor === Array){
				var arrayCidade = [];
				var arrayEstado = [];
				var arrayTipo = [];
				$.each(response, function(index, obj) {
					var row = $('<div class="col-md-12 col-xs-12 itemPonto">');
					row.append('<p class="p-area categoria">' + obj.tipoPonto + '</p>');
					row.append('<p class="p-title">' + obj.nome_loja.toUpperCase() + '</p>');
					row.append('<p class="p-area"> <i class="fa fa-map-marker" aria-hidden="true"></i> ' + obj.endereco + '</p>');
					row.append('<p class="p-area">' + obj.cidade +', '+ obj.estado  + '</p>');
					if(obj.telefone_loja != ""){
						row.append('<p class="p-area"><i class="fa fa-phone" aria-hidden="true"></i> <span id="telListaPontos"> ' +obj.telefone_loja + '</span></p>');
					}
					(obj.delivery == "1" ? row.append('<p class="p-area color-green"> <i class="fa fa-motorcycle"></i> Delivery' +'</p>') : "");
					(obj.venda_online == "1" ? row.append('<p class="p-area color-green"> <i class="fa fa-hand-o-up"></i> Venda online' +'</p>') : "");
					if(obj.site != ""){
						row.append('<p class="p-area color-green">' + obj.site +'</p>');
					}
					if(obj.tipoRedeSocial && obj.nomeRedeSocial != ""){
						row.append('<p class="p-area color-green">' + obj.tipoRedeSocial + ': '+ obj.nomeRedeSocial +'</p>');
					}

					row.append(`<p class="p-area rota-lista cursor-pointer-lrv" id="rotaButton" onclick="calcularRota(${obj.lat},${obj.lng})"> Rota</p>`);
					$('#lrv-ponto-list').append(row);


					arrayCidade.push(obj.cidade);
					arrayEstado.push(obj.estado);
					arrayTipo.push(obj.tipoPonto);
				});

				var unicoCidade = arrayCidade.filter(function(elem, index, self) {
					return index === self.indexOf(elem);
				});
				unicoCidade.forEach(element => {
					let optionCidadeMapa = `<option value="${element}">${element}</option>`;
					$('#cidadeMapa').append(optionCidadeMapa);
				});

				var unicoEstado = arrayEstado.filter(function(elem, index, self) {
					return index === self.indexOf(elem);
				});
				unicoEstado.forEach(element => {
					let estadoMapa = `<option value="${element}">${element}</option>`;
					$('#ufMapa').append(estadoMapa);
				});

				var unicoTipo = arrayTipo.filter(function(elem, index, self) {
					return index === self.indexOf(elem);
				});

				unicoTipo.forEach(element => {
					let tipoPontoMapa = `<option value="${element}">${element}</option>`;
					$('#tipoPontoMapa').append(tipoPontoMapa);
				});


			}
		},
		error: function(response){
			console.log(response);
			$('#msgErroFront').html("Erro interno no servidor");
			$('#msgErroFront').show();				
		},
		// dataType:"json"
	});
}

function unique(value, index, self) { 
    return self.indexOf(value) === index;
}
function redirecionarUrlSite(site){
	window.open(site, '_blank');
}

function filtrarListaMapa(filtroUf, filtroCidade, filtroTipo){
	var uf = filtroUf == 'LRVnaoFiltrar' ? "" : $('#ufMapa').val();
	var cidade = filtroCidade == 'LRVnaoFiltrar' ? "" : $('#cidadeMapa').val();
	var tipo = filtroTipo == 'LRVnaoFiltrar' ? "" : $('#tipoPontoMapa').val();

	$.ajax({
		url:"php/filtrar-marcador",
		method: "POST",
		data: {
			estado: uf,
			cidade: cidade,
			tipoPonto: tipo
		},
		beforeSend: function(){
			loaderMaps();
		},
		complete: function(){
			$('#loaderMaps').remove();
		},
		success :  function(response){		
			var resposta = JSON.parse(response);
			$('#lrv-ponto-list').children().remove();
			if(resposta.length > 0){
				$.each(resposta, function(index, obj) {
	
					var row = $('<div class="col-md-12 col-xs-12 itemPonto">');
					row.append('<p class="p-area categoria">' + obj.tipoPonto + '</p>');
					row.append('<p class="p-title">' + obj.nome_loja.toUpperCase() + '</p>');
					row.append('<p class="p-area"> <i class="fa fa-map-marker" aria-hidden="true"></i> ' + obj.endereco + '</p>');
					row.append('<p class="p-area">' + obj.cidade +', '+ obj.estado  + '</p>');
					if(obj.telefone_loja != ""){
						row.append('<p class="p-area"><i class="fa fa-phone" aria-hidden="true"></i> <span id="telListaPontos"> ' +obj.telefone_loja + '</span></p>');
					}
					(obj.delivery == "1" ? row.append('<p class="p-area color-green"> <i class="fa fa-motorcycle"></i> Delivery' +'</p>') : "");
					(obj.venda_online == "1" ? row.append('<p class="p-area color-green"> <i class="fa fa-hand-o-up"></i> Venda online' +'</p>') : "");
					if(obj.site != ""){
						row.append('<p class="p-area color-green">' + obj.site +'</p>');
					}
					row.append(`<p class="p-area rota-lista cursor-pointer-lrv" id="rotaButton" onclick="calcularRota(${obj.lat},${obj.lng})"> Rota</p>`);
					$('#lrv-ponto-list').append(row);
				});
			}else{
				naoEncontrouFiltro();
				$('#ufMapa').val('Estado');
				$('#cidadeMapa').val('Cidade');
				$('#tipoPontoMapa').val('tipoPonto');
				filtrarListaMapa('LRVnaoFiltrar', 'LRVnaoFiltrar', 'LRVnaoFiltrar');
			}
		},
		error: function(response){
			$('#msgErroFront').html("Erro interno no servidor");
			$('#msgErroFront').show();				
		},
		dataType: 'text'
	});
}

function naoEncontrouFiltro(id) {
	let modalAppend = `<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <p style="font-weight: bold;" class="modal-title" id="exampleModalLongTitle">Confirmação</p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <span style="font-weight: bold;">Ops, nenhum ponto foi encontrado com esses filtros!</span>
				</div>
					<div class="modal-footer">
                        <a style="text-decoration: none; color: #fff;" class="btn btn-primary" data-dismiss="modal">Fechar</a>
                    </div>
                </div>
            </div>
		</div>`
		$('body').append(modalAppend);
		$("#exampleModalLong").modal();
}

function calcularRota(lat, lng){
	var directionsService = new google.maps.DirectionsService;
	var drag_pos1 = {
		lat: lat,
		lng: lng
	};

	directionsService.route({
			origin: pos_ini,
			destination: drag_pos1,
			travelMode: 'DRIVING',
			provideRouteAlternatives: true
		},
		function(response, status) {
			if (status === 'OK') {

				for (var i = 0, len = response.routes.length; i < len; i++) {
					if (i === 0) {
						directionsRenderer1.setDirections(response);
						directionsRenderer1.setRouteIndex(i);

					} else {

						directionsRenderer2.setDirections(response);
						directionsRenderer2.setRouteIndex(i);
					}
				}
				console.log(response);
			} else {
				window.alert('Directions request failed due to ' + status);
			}
		});

		function CalculaDistancia(origem, destino) {
			var service = new google.maps.DistanceMatrixService();
			service.getDistanceMatrix(
			{
				origins: [origem],
				destinations: [destino],
				travelMode: google.maps.TravelMode.DRIVING
			}, callback);
		}
		function callback(response, status) {
			if (status == google.maps.DistanceMatrixStatus.OK) {
				$('#distanciaPonto').append(response.rows[0].elements[0].distance.text);
				$('#tempoPonto').append(response.rows[0].elements[0].duration.text);
			}
		}
		var i = CalculaDistancia(pos_ini, drag_pos1);

}

function loaderMaps(){
	$("#lrv-ponto-list").children().remove();
	let appendLoader = `<div id="loaderMaps">
	<div class="spinnerMaps">
	  <div class="double-bounce1"></div>
	  <div class="double-bounce2"></div>
	</div>
  </div>`
  $('#lrv-ponto-list').append(appendLoader);
}