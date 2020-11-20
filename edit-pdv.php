<?php include_once("php/settings.php");?>
<?php
    require_once('php/conexao.php');
    session_start();
    if(!isset($_SESSION['loggedIN'])){
        header("Location: login.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-177899935-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-177899935-1');
    </script>


     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="LRV Brasil, área administrativa. #LaOnça" />
     <meta name="keywords" content="lrv brasil, la revolucion tabaco, la revolucion, o verdadeiro destalado, tabaco da onça"/>
     <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
     
     <meta name="author" content="victorhgb">
     <meta property="og:site_name" content="LRV Brasil" />
     <meta property="og:site" content="<?php echo url_site;?>historia-do-tabaco.php" />
     <meta property="og:title" content="Lista de PDV - LRV Brasil" />
     <meta property="og:description" content="LRV Brasil, área administrativa. #LaOnça" />
     <meta property="og:image" content="img/lrv.png" />
     <meta property="og:url" content="<?php echo url_site;?>edit-pdv.php" />
     <meta property="og:type" content="website" />
     <meta property="og:locale" content="pt-BR">
 
     <meta name="robots" content="index, follow">
     <meta name="msvalidate.01" content="30BDCB2D32C5BC2956AE08F9227D140E" />
 
     <title>Editar PDV - LRV Brasil</title>
 
     <link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
 
     
     <link rel="stylesheet" href="css/terceiros/flickity-docs.css?v=1.4">
     <link rel="stylesheet" href="css/terceiros/bootstrap.min.css?v=1.4">
     <link rel="stylesheet" href="css/terceiros/font-awesome.min.css?v=1.4">
     <link rel="stylesheet" href="css/terceiros/line-icons.css?v=1.4">
     <link rel="stylesheet" href="css/terceiros/owl.carousel.css?v=1.4">
     <link rel="stylesheet" href="css/terceiros/owl.theme.css?v=1.4">
     <!-- <link rel="stylesheet" href="css/magnific-popup.css?v=1.4"> -->
     <!-- <link rel="stylesheet" href="css/slicknav.css?v=1.4"> -->
     <link rel="stylesheet" href="css/terceiros/animate.css?v=1.4">
     <link rel="stylesheet" href="css/nosso/main.css?v=1.4">    
     <link rel="stylesheet" href="css/terceiros/responsive.css?v=1.4">
     <link rel="stylesheet" type="text/css" href="media/css/jquery.dataTables.css">
 
     
     <!--[if IE]>
     <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
     <![endif]-->

     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjchTw42oDieCVSdDFoKWw6Ua69xAf9AQ"></script>
     <script>

        var cadMap;
        function initialize() {
        var mapOptions = {
            zoom: 3,
            center: {lat: -15.814432199999997, lng: -47.888157299999996}
        };
        cadMap = new google.maps.Map(document.getElementById('cadMap'),
            mapOptions);

        var marker = new google.maps.Marker({
            // The below line is equivalent to writing:
            // position: new google.maps.LatLng(-34.397, 150.644)
            position: {lat: -15.814432199999997, lng: -47.888157299999996},
            cadMap: cadMap
        });

        google.maps.event.addListener(marker, 'click', function() {
            marker.setMap(null);
            infowindow.open(cadMap, marker);
        });

        google.maps.event.addListener(cadMap, 'click', function(event){
            marker.setMap(null);    
            marker = new google.maps.Marker({
                map:       cadMap,
                position:  event.latLng
            });     
        });

        google.maps.event.addListener(cadMap, 'click', function( event ){
            var lat = event.latLng.lat();
            var lng = event.latLng.lng();
            $('#mapaLat').val(lat);
            $('#mapaLng').val(lng);
            console.log($('#mapaLat').val());
            console.log($('#mapaLng').val());
        });
        }

        google.maps.event.addDomListener(window, 'load', initialize);
     </script>
</head>
<body>
  <header id="" data-stellar-background-ratio="0.5" class="margin-bottom-90">
  <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo" style="height: 70px;">
        <div class="container">
          <div class="navbar-header">
            <a href="<?php echo url_site;?>" class="navbar-brand"><img class="img-fulid" src="<?php echo url_site;?>img/lrv.png" alt="LRV Logo" alt="LRV Logo" height="auto" width="auto"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <i class="lnr lnr-menu"></i>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item">
                <a class="nav-link page-scroll" href="lista-de-pontos.php">PDV Pendentes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="pdv-ativos.php">PDV Ativos</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" data-toggle="modal" data-target="#exampleModalLong" onclick="confirmeSair()"><i class="fa fa-sign-out-alt"></i> Sair</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="menu-overlay"></div>
        <button class="menu-open form-control" style="margin-left: 90%;">
          <i class="fa fa-bars" aria-hidden="true"></i>
        </button>

        <div class="side-menu-wrapper">
          <a style="font-size: 70px;" href="#" class="menu-close">×</a>
          <ul>
            <li><a class="page-scroll" href="lista-de-pontos.php" rel="nofollow">PDV Pendentes</a></li>
            <li><a class="page-scroll" href="pdv-ativos.php" rel="nofollow">PDV Ativos</a></li>
            <li><a class="page-scroll" data-toggle="modal" data-target="#exampleModalLong" href="" onclick="confirmeSair()"> Sair</a></li>
          </ul>
        </div>

      </nav>
  </header>

  <section id="cad-ponto" class="section" data-stellar-background-ratio="-0.2">
    <div class="contact-form">
      <div class="container">
        <div class="alert alert-success" role="alert" id="msgSucessoCad" style="display: none;">
          Cadastro realizado com sucesso, o ponto está em análise e logo será disponibilizado!
        </div>
        <br>      
            <div class="row">    
                <div class="col-lg-12 col-sm-12 col-xs-12 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="0.5s">
                    <div class="contact-block">
                        <form id="cad-ponto">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group"> 
                                        <input type="checkbox" id="ponto_aprovado" class="" name="ponto_aprovado">
                                        <label for="ponto_aprovado"> Pontos aprovado</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome da loja" required data-error="Por favor, digite o nome da loja!">
                                        <div class="help-block with-errors"></div>
                                    </div>                                 
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="CNPJ (Opcional)" id="cnpj" class="form-control" name="cnpj">
                                        <div class="help-block with-errors"></div>
                                    </div> 
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group"> 
                                        <input type="text" placeholder="Telefone de contato da loja (Opcional)" id="telContatoLoja" class="form-control" name="telContatoLoja" required data-error="Por favor, digite o telefone do contato da loja!">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group"> 
                                        <input type="text" placeholder="CEP" id="cep" class="form-control" name="cep" required data-error="Por favor, digite CEP!">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group" style="display: flex;">
                                        <div class="col-md-10" style=" padding-left: 0px;">
                                            <input type="text" placeholder="Endereço" id="endereco" class="form-control" name="endereco" required data-error="Por favor, digite o endereço!">
                                        </div>
                                        <div class="col-md-2" style="padding-right: 0px;">
                                            <input type="text" placeholder="Nº (Opcional)" id="complemento" class="form-control" name="complemento">
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group"> 
                                        <input type="text" placeholder="Bairro" id="bairro" class="form-control" name="bairro" required data-error="Por favor, digite o bairro!">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group"> 
                                        <select class="form-control" name="uf" id="uf" style="height: auto !important;" required>
                                            <option value="estado" disabled selected>Estado</option>
                                            <option value="AC">AC</option>
                                            <option value="AL">AL</option>
                                            <option value="AM">AM</option>
                                            <option value="AP">AP</option>
                                            <option value="BA">BA</option>
                                            <option value="CE">CE</option>
                                            <option value="DF">DF</option>
                                            <option value="ES">ES</option>
                                            <option value="GO">GO</option>
                                            <option value="MA">MA</option>
                                            <option value="MG">MG</option>
                                            <option value="MS">MS</option>
                                            <option value="MT">MT</option>
                                            <option value="PA">PA</option>
                                            <option value="PB">PB</option>
                                            <option value="PE">PE</option>
                                            <option value="PI">PI</option>
                                            <option value="PR">PR</option>
                                            <option value="RJ">RJ</option>
                                            <option value="RN">RN</option>
                                            <option value="RS">RS</option>
                                            <option value="RO">RO</option>
                                            <option value="RR">RR</option>
                                            <option value="SC">SC</option>
                                            <option value="SE">SE</option>
                                            <option value="SP">SP</option>
                                            <option value="TO">TO</option>
                                         </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group"> 
                                        <input type="text" placeholder="Cidade" id="cidade" class="form-control" name="cidade" required data-error="Por favor, digite a cidade!">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <select name="select" class="form-control" id="tipoPonto" style="height: auto !important;" required>
                                            <option value="tipoPonto" disabled selected>Tipo de ponto de venda</option> 
                                            <option value="Tabacaria">Tabacaria</option>
                                            <option value="Head Shop">Head Shop</option>
                                            <option value="Padaria">Padaria</option>
                                            <option value="Loja de conveniência">Loja de conveniência</option>
                                            <option value="Banca de jornal">Banca de jornal</option>
                                            <option value="Mercado">Mercado</option>
                                            <option value="Distribuidora de bebidas">Distribuidora de bebidas</option>
                                            <option value="Outros">Outros</option>
                                        </select>
                                      <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group"> 
                                        <input type="text" placeholder="Site (Opcional)" id="site" class="form-control" name="site">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group"> 
                                        <input type="text" placeholder="E-mail (Opcional)" id="email" class="form-control" name="email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group" style="display: flex;">
                                      <div class="col-md-4" style=" padding-left: 0px;">
                                        <select name="select" class="form-control" id="tipoRedeSocial" style="height: auto !important;">
                                            <option value="tipoRedeSocial" disabled selected>Rede social</option> 
                                            <option value="Instagram">Instagram</option>
                                            <option value="Facebook">Facebook</option>
                                            <option value="Twitter">Twitter</option>
                                        </select>
                                      </div>
                                      <div class="col-md-8" style="padding-right: 0px;">
                                          <input type="text" placeholder="@" id="nomeRedeSocial" class="form-control" name="nomeRedeSocial">
                                      </div>
                                      <div class="help-block with-errors"></div>
                                  </div>
                              </div>
                                <div class="col-md-12">
                                    <div class="form-group"> 
                                        <input type="checkbox" id="delivery" class="" name="delivery">
                                        <label for="delivery"> Possui delivery?</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group"> 
                                        <input type="checkbox" id="vendaOnline" class="" name="vendaOnline">
                                        <label for="vendaOnline"> Vende online?</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group"> 
                                      <input type="checkbox" id="definirMapa" class="" name="definirMapa">
                                      <label for="definirMapa"> Definir a localização pelo mapa (Opcional)</label>
                                  </div>
                                </div>
                              <div class="col-md-12" id="divCadMap">
                                    <span style="font-weight: 600;">*Para definir a localização, basta clicar na região do mapa que deseja.</span>
                                    <div class="divider"><span></span></div>
                                <div id="cadMap"></div>
                              </div>
                                <div class="col-md-12" style="text-align: center;">
                                    <input type="hidden" placeholder="Latitude" id="mapaLat" class="form-control latitude" name="mapaLat">
                                    <input type="hidden" placeholder="Longitude" id="mapaLng" class="form-control longitude" name="mapaLng">
                                    <input type="hidden" placeholder="Latitude" id="lat" class="form-control latitude" name="lat" required data-error="Por favor, digite a latitude">
                                    <input type="hidden" placeholder="Longitude" id="lng" class="form-control longitude" name="lng" required data-error="Por favor, digite a longitude">
                                </div>
                                <div class="submit-button text-center" style="margin: 20px auto;">
                                    <button style="color: #fff !important;" type="button" class="btn btn-success" onclick="editarMarcador()">Editar</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div> 
                                    <div class="clearfix"></div> 
                                </div>
                                <br>
                                <div class="row" style="width: 100%;">
                                  <p style="margin: 0 auto;" id="msgErroFront" class="text-center text-danger"></p>
                                </div>
                            </div>            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>           
  </section>

    <footer style="bottom: 0; width: 100%;">          
        <div class="container">
            <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12">
                <div class="" style="text-align: center; color: #fff;">
                <p><?php echo Copyright;?></p>
                </div>
            </div>  
            </div>
        </div>
    </footer>
  
      <a href="#" class="back-to-top">
        <i class="lnr lnr-arrow-up"></i>
      </a>
      
      <div id="loader">
        <div class="spinner">
          <div class="double-bounce1"></div>
          <div class="double-bounce2"></div>
        </div>
      </div>

      <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="js/terceiros/jquery-min.js?v=1.4"></script>
    <script src="js/terceiros/popper.min.js?v=1.4"></script>
    <script src="js/terceiros/bootstrap.min.js?v=1.4"></script>
    <script src="js/terceiros/owl.carousel.js?v=1.4"></script>
    <script src="js/terceiros/flickity.pkgd.js?v=1.4"></script>   
    <script src="js/terceiros/jquery.stellar.min.js?v=1.4"></script>    
    <script src="js/terceiros/jquery.nav.js?v=1.4"></script>    
    <script src="js/terceiros/scrolling-nav.js?v=1.4"></script>    
    <script src="js/terceiros/jquery.easing.min.js?v=1.4"></script>    
    <script src="js/terceiros/smoothscroll.js?v=1.4"></script>    
    <!-- <script src="js/jquery.slicknav.js?v=1.4"></script>      -->
    <script src="js/terceiros/wow.js?v=1.4"></script>   
    <script src="js/terceiros/jquery.vide.js?v=1.4"></script>
    <script src="js/terceiros/jquery.counterup.min.js?v=1.4"></script>    
    <!-- <script src="js/jquery.magnific-popup.min.js?v=1.4"></script>     -->
    <script src="media/js/jquery.dataTables.js"></script>
    <script src="js/terceiros/waypoints.min.js?v=1.4"></script>    
    <script src="js/terceiros/form-validator.min.js?v=1.4"></script>
    <script src="js/nosso/contact-form-script.js?v=1.4"></script>   
    <script src="js/nosso/main.js?v=1.4"></script>
    <script src="js/nosso/locais.js?v=1.4"></script>
    <script src="js/nosso/login.js?v=1.4"></script>
    <script src="js/nosso/coleta.js?v=1.4"></script>
    <script src="js/terceiros/jquery.mask.min.js?v=1.4"></script>
</body>
</html>