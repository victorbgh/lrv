<?php include_once("php/settings.php");?>
<?php
    session_start();
    if(isset($_SESSION['loggedIN'])){
        header('Location: lista-de-pontos.php');
        exit();
    }
    // $session_value=(isset($_SESSION['admin']))?$_SESSION['admin']:'';
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
     <meta property="og:site" content="<?php echo url_site;?>login" />
     <meta property="og:title" content="Login - LRV Brasil" />
     <meta property="og:description" content="LRV Brasil, área administrativa. #LaOnça" />
     <meta property="og:image" content="<?php echo url_site;?>img/lrv.png" />
     <meta property="og:url" content="<?php echo url_site;?>login" />
     <meta property="og:type" content="website" />
     <meta property="og:locale" content="pt-BR">
 
     <meta name="robots" content="index, follow">
     <meta name="msvalidate.01" content="30BDCB2D32C5BC2956AE08F9227D140E" />
 
     <title>Login - LRV Brasil</title>
 
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
 
     
     <!--[if IE]>
     <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
     <![endif]-->
</head>
<body>
  <header id="" data-stellar-background-ratio="0.5" class="">
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top topo nav-login" style="padding: 15px; height: 75px; text-align: center; background: #000 !important;">
      <a style="margin-left: auto; margin-right: auto; position: unset !important;" href="<?php echo url_site;?>" class="navbar-brand"><img class="img-fulid" src="img/LRV BRANCO PNG.png" alt="LRV Logo" alt="LRV Logo" height="auto" width="auto"></a>  
    </nav>
  </header>

    <div class="login-page">
        <div class="form">
            <form class="login-form" id="login-form">
                <input type="text" name="email" id="email" placeholder="E-mail"/>
                <input type="password" name="senha" id="senha" placeholder="Senha"/>
                <button type="button" id="login" onclick="logar()">login</button>
                <!-- <p class="message">Não é registrado? <a href="#">Criar uma conta</a></p> -->
            </form>
            <p id="msgErroFront" class="text-center text-danger"></p>
            <!-- ARRUMAR -->
            <p class="text-center text-danger">
                <?php
                    if(isset($_SESSION['loginErro'])){
                        echo $_SESSION['loginErro'];
                        unset($_SESSION['loginErro']);
                    }
                ?>
            </p>
        </div>
    </div>
    <br>




    <footer style="position: absolute; bottom: 0; width: 100%;">          
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

      <!-- <div id="laRevolucionConfirmarIdade" class="overlayConfirm">
        <div class="imagemLRV">
          <div class="overlayConfirm-content">
            <a class="" style="font-weight: bold;">VOCÊ TEM MAIS DE 18 ANOS?</a>
            <div class="lrv-buttons-age">
              <button class="text-center btn btn-success" onclick="closeNav()"
                style="margin-right: 30px; cursor: pointer; font-size: 25px;">Sim</button>
              <button class="text-center btn btn-danger" onclick="historyBack()"
                style="margin-left: 30px; cursor: pointer; font-size: 25px;">Não</button>
            </div>
          </div>
        </div>
      </div> -->

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
    <script src="js/terceiros/waypoints.min.js?v=1.4"></script>    
    <script src="js/terceiros/form-validator.min.js?v=1.4"></script>
    <script src="js/nosso/contact-form-script.js?v=1.4"></script>   
    <script src="js/nosso/main.js?v=1.4"></script>
    <!-- <script src="js/nosso/locais.js?v=1.4"></script> -->
    <script src="js/nosso/login.js?v=1.4"></script>
</body>
</html>