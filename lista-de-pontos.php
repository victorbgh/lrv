<?php include_once("php/settings.php");?>
<?php
    require_once('php/conexao.php');
    session_start();
    if(!isset($_SESSION['loggedIN'])){
        header("Location: login.php");
        exit();
    }
    // $session_value=(isset($_SESSION['admin']))?$_SESSION['admin']:'';
 
    $sql = "SELECT * FROM pontos_venda where ponto_aprovado=0";
    $result = $conn->query($sql);
    $arr_users = [];
    if ($result->num_rows > 0) {
        $arr_users = $result->fetch_all(MYSQLI_ASSOC);
    }

    function mask($val, $mask){
        $maskared = '';
        $k = 0;
        for($i = 0; $i<=strlen($mask)-1; $i++){
            if($mask[$i] == '#'){
                if(isset($val[$k]))
                $maskared .= $val[$k++];
            }else{
                if(isset($mask[$i]))
                $maskared .= $mask[$i];
            }
        }
        return $maskared;
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
     <meta property="og:site" content="<?php echo url_site;?>lista-de-pontos.php" />
     <meta property="og:title" content="Lista de PDV - LRV Brasil" />
     <meta property="og:description" content="LRV Brasil, área administrativa. #LaOnça" />
     <meta property="og:image" content="<?php echo url_site;?>img/lrv.png" />
     <meta property="og:url" content="<?php echo url_site;?>lista-de-pontos.php" />
     <meta property="og:type" content="website" />
     <meta property="og:locale" content="pt-BR">
 
     <meta name="robots" content="index, follow">
     <meta name="msvalidate.01" content="30BDCB2D32C5BC2956AE08F9227D140E" />
 
     <title>PDV Pendentes - LRV Brasil</title>
 
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
</head>
<body>
  <header id="" data-stellar-background-ratio="0.5" class="margin-bottom-90">
  <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo" style="height: 70px; background: #000 !important;">
        <div class="container">
          <div class="navbar-header">
            <a href="<?php echo url_site;?>" class="navbar-brand"><img class="img-fulid" src="<?php echo url_site;?>img/LRV BRANCO PNG.png" alt="LRV Logo" alt="LRV Logo" height="auto" width="auto"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <i class="lnr lnr-menu"></i>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item">
                <a class="nav-link page-scroll active" href="lista-de-pontos.php" style="color: #fff !important;">PDV Pendentes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="pdv-ativos.php" style="color: #fff !important;">PDV Ativos</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" data-toggle="modal" data-target="#exampleModalLong" onclick="confirmeSair()" style="color: #fff !important;"><i class="fa fa-sign-out-alt"></i> Sair</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="menu-overlay"></div>
        <button class="menu-open" style="margin-left: 90%;">
          <i class="fa fa-bars" aria-hidden="true"></i>
        </button>

        <div class="side-menu-wrapper">
          <a style="font-size: 70px;" href="#" class="menu-close">×</a>
          <ul>
            <li><a class="page-scroll active ativo" href="lista-de-pontos.php" rel="nofollow">PDV Pendentes</a></li>
            <li><a class="page-scroll" href="pdv-ativos.php" rel="nofollow">PDV Ativos</a></li>
            <li><a class="page-scroll" data-toggle="modal" data-target="#exampleModalLong" href="" onclick="confirmeSair()"> Sair</a></li>
          </ul>
        </div>

      </nav>
  </header>

  <div class="">
    <div class="container box-shadow">
        <div class="heading" style="padding: 20px;">
                <h1 style="text-align: center;">PDV Pendentes</h1>
                <div class="divider"><span></span></div>
        <div class="table-responsive">
        <table id="coletasTable" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
          <thead>
              <tr>
                  <th>Nome</th>
                  <th>CNPJ</th>
                  <th>Endereço</th>
                  <th style="width: 100px">Estado</th>
                  <th>Tipo de ponto</th>
                  <th class="listaLocaisEdit"></th>
              </tr>
          </thead>
          <tbody>
              <?php if(!empty($arr_users)) { ?>
                  <?php foreach($arr_users as $user) { ?>
                      <tr>
                          <td><?php echo $user['nome_loja']; ?></td>
                          <td><?php echo $user['cnpj']; ?></td>
                          <td><?php echo $user['endereco']; ?>, <?php echo $user['bairro']; ?></td>
                          <td style="width: 100px"><?php echo $user['estado']; ?></td>
                          <td><?php echo $user['tipoPonto']; ?></td>
                          <td class="listaLocaisEdit" style="width:130px">
                          <button class="marginbutton" title="Visualizar Local" onclick="viasualizarPdv(<?php echo $user['id']; ?>)">
                          <a style="color: #000;" class="fa fa-search"></a></button>
                          <button class=" marginbutton" title="Aprovar Local" onclick="confirmacaoAprovacaoPDV(<?php echo $user['id']; ?>)">
                          <a style="color: green;" class="fa fa-check-square" ></a></button>
                          <button class=" marginbutton" title="Excluir Local" onclick="confirmacaoExclusaoPDV(<?php echo $user['id']; ?>)">
                          <a style="color: red;" class="fa fa-times"></a></button>
                          </td>
                      </tr>
                  <?php } ?>
              <?php } ?>
          </tbody>
        </table>
        </div>
    </div>
    </div>
        </div>

  
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
</body>
</html>