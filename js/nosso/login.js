$('document').ready(function(){
	$('#msgErroFront').hide();
	$('#email, #senha').keypress(function(event){
		var keycode = (event.keyCode ? event.keyCode : event.which);
		if(keycode == '13'){
			logar();
		}
	});

	$('#cadNome, #cadEmail, #senha1, #senha2').keypress(function(event){
		var keycode = (event.keyCode ? event.keyCode : event.which);
		if(keycode == '13'){
			registrar();
		}
	});
	
});



function registrar(){
	var nome = $('#cadNome').val();
	var email = $('#cadEmail').val();
	var senha = $('#senha1').val(); 
	var senhaRepetida = $('#senha2').val(); 

	if(!verificarCampos(nome, email, senha, senhaRepetida)){
		return false;
	}else{

		$.ajax({
			url:"php/cad-usuario",
			method: "POST",
			data: {
				login: 1,
				admin: false,
				nome:nome,
				email: email,
				senha: senha,
				senhaRepetida:senhaRepetida
			},
			success :  function(response){						
				if(response.indexOf('success') >= 0){
					console.log("deu certo carai");
					confirmacaoRegistro();
				}else{
					$('#msgErroFront').html(response);
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

function logar(){
	var email = $('#email').val();
	var senha = $('#senha').val(); 

	if(email == "" || senha == ""){
		$('#msgErroFront').html('login e/ou senha vazio(s)!');
		$('#msgErroFront').show();
	}else{

		$.ajax({
			url:"php/valida",
			method: "POST",
			data: {
				login: 1,
				email: email,
				senha: senha
			},
			success :  function(response){						
				console.log(response);
				if(response.indexOf('success') >= 0){
					window.location = 'lista-de-pontos.php';
				}else{
					$('#msgErroFront').html(response);
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

function confirmeSair() {
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
                    <span style="font-weight: bold;">Gostaria de sair do sistema?</span>
                </div>
					<div class="modal-footer">
						<a style="text-decoration: none; color: #fff;" class="btn btn-primary" href="php/logout.php">confirmar</a>
                        <a style="text-decoration: none; color: #fff;" class="btn btn-secondary" data-dismiss="modal">Fechar</a>
                    </div>
                </div>
            </div>
		</div>`
		$('body').append(modalAppend);
}

function verificarCampos(nome, email, senha, senhaRepetida){
	if(nome == "" || nome == null){
		$('#msgErroFront').html('Campo nome vazio!');
		$('#msgErroFront').show();
		return false;
	}else if(email == "" || email == null){
		$('#msgErroFront').html('Campo e-mail vazio!');
		$('#msgErroFront').show();
		return false;
	}else if(senha == "" || senha == null){
		$('#msgErroFront').html('Informa a senha!');
		$('#msgErroFront').show();
		return false;
	}else if(senhaRepetida == "" || senhaRepetida == null){
		$('#msgErroFront').html('Repita a senha!');
		$('#msgErroFront').show();
		return false;
	}else if(senha != senhaRepetida){
		$('#msgErroFront').html('As senhas devem ser identicas!');
		$('#msgErroFront').show();
		return false;
	}
	return true;
}

function confirmacaoRegistro() {
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
                    <span style="font-weight: bold;">Cadastro realizado com sucesso</span>
                </div>
                    <div class="modal-footer">
                        <a style="text-decoration: none; color: #fff;" class="btn btn-success" data-dismiss="modal" onclick="resetarLogin()">Fechar</a>
                    </div>
                </div>
            </div>
		</div>`
		$('body').append(modalAppend);
		$("#exampleModalLong").modal();
}

function confirmacaoAtualizarRegistro() {
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
                    <span style="font-weight: bold;">Atualização realizado com sucesso</span>
                </div>
                    <div class="modal-footer">
                        <a style="text-decoration: none; color: #fff;" class="btn btn-secondary" data-dismiss="modal" onclick="resetUpdate()">Fechar</a>
                    </div>
                </div>
            </div>
		</div>`
		$('body').append(modalAppend);
		$("#exampleModalLong").modal();
}

function resetarLogin(){
	$('#cadNome').val('');
	$('#cadEmail').val('');
	$('#senha1').val('');
	$('#senha2').val('');
	$('#entrarLogin').click();
	
	// por algum motivo eu tive que chamar o ajax pra deslogar dps de persistir o cad-usuario
	$.ajax({
		url:"php/logout",
		method: "POST",
		success :  function(response){						
			if(response.indexOf('success') >= 0){
				// window.location = 'login.php';
				console.log("deu certo carai");
			}else{
				$('#msgErroFront').html(response);
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

function selecionarConta(id){
	$.ajax({
		url:"php/buscar-usuario",
		method: "POST",
		data: { id: id },
		success :  function(response){						
			if(response.indexOf('empty') == -1){
				localStorage.setItem('data', JSON.stringify(response));
				window.location = 'conta.php';
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
	})
}

function cadUsuario(){
	var nome = $('#nomeUsuario').val();
	var email = $('#emailUsuario').val();
	var senha = $('#senhaUsuario').val(); 
	var senhaRepetida = $('#senhaRepetida').val();
	var tipo = $('#tipoUsuario').val(); 
	

	if(!verificarCampos(nome, email, senha, senhaRepetida)){
		return false;
	}else{
		if (tipo == "adm"){
			tipo = 1;
		}else{
			tipo = 0;
		}

		$.ajax({
			url:"php/cad-usuario-adm.php",
			method: "POST",
			data: {
				nome:nome,
				email: email,
				senha: senha,
				senhaRepetida:senhaRepetida,
				admin: tipo
			},
			success :  function(response){						
				if(response.indexOf('success') >= 0){
					document.getElementById("cadUserAdm").reset();
					confirmacaoCadUserAdm();
				}else{
					$('#msgErroFront').html(response);
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

function confirmacaoCadUserAdm() {
	let modalAppend = `<div class="modal fade" id="confirmacaoCadUserAdmModal" tabindex="-1" role="dialog" aria-labelledby="confirmacaoCadUserAdm" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmacaoCadUserAdm">Confirmação</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <span style="font-weight: bold;">Cadastro realizado com sucesso</span>
                </div>
                    <div class="modal-footer">
                        <a style="text-decoration: none; color: #fff;" class="btn btn-success" data-dismiss="modal">Fechar</a>
                    </div>
                </div>
            </div>
		</div>`
		$('body').append(modalAppend);
		$("#confirmacaoCadUserAdmModal").modal();
}