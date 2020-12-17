<?php include_once("php/settings.php");?>
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="LRV Brasil, conteúdo destinado a maiores de 18 anos #LaOnça" />

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta name="author" content="victorhgb">
    <meta property="og:site_name" content="LRV Brasil" />
    <meta property="og:site" content="<?php echo url_site;?>" />
    <meta property="og:title" content="LRV Brasil - O Verdadeiro Destalado!" />
    <meta property="og:description" content="LRV Brasil - O Verdadeiro Destalado!" />
    <meta property="og:image" content="<?php echo url_site;?>img/lrv.png" />
    <meta property="og:url" content="<?php echo url_site;?>" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="pt-BR">

    <meta name="robots" content="index, follow">
    <meta name="msvalidate.01" content="30BDCB2D32C5BC2956AE08F9227D140E" />

    <title lang="pt"> LRV Brasil - O verdadeiro destalado</title>

    <link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    
    <script type="text/javascript" src="js/terceiros/flickity.pkgd.js?v=1.4"></script>
	  <link rel="stylesheet" href="css/terceiros/flickity-docs.css?v=1.4">
    <link rel="stylesheet" href="css/terceiros/bootstrap.min.css?v=1.4">
    <link rel="stylesheet" href="css/terceiros/font-awesome.min.css?v=1.4">
    <link rel="stylesheet" href="css/terceiros/line-icons.css?v=1.4">
    <link rel="stylesheet" href="css/terceiros/owl.carousel.css?v=1.4">
    <link rel="stylesheet" href="css/terceiros/owl.theme.default.min.css?v=1.4">
    <link rel="stylesheet" href="css/terceiros/owl.theme.css?v=1.4">
    <!-- <link rel="stylesheet" href="css/magnific-popup.css?v=1.4"> -->
    <!-- <link rel="stylesheet" href="css/slicknav.min.css?v=1.4"> -->
    <link rel="stylesheet" href="css/terceiros/animate.css?v=1.4">
    <link rel="stylesheet" href="css/nosso/main.css?v=1.4">
    <link rel="stylesheet" href="css/terceiros/responsive.css?v=1.4">
    <script src='https://lrv-instagram.herokuapp.com/token.js'></script>
 
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
    <div id="header" class="navtop"></div>
    
    <header id="home-area" data-stellar-background-ratio="0.5" class="overlay">

      
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
                <a class="nav-link page-scroll" href="#home-area" lang="pt">Home</a>
                <a class="nav-link page-scroll" href="#home-area" lang="es">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#services" lang="pt">Sobre</a>
                <a class="nav-link page-scroll" href="#services" lang="es">Sobre nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#culturaTabaco" lang="pt">Cultura do Tabaco</a>
                <a class="nav-link page-scroll" href="#culturaTabaco" lang="es">Cultura del tabaco</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#a-revolucao" lang="pt">Produtos</a>
                <a class="nav-link page-scroll" href="#a-revolucao" lang="es">Nuestros productos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#testimonial" lang="pt">Registro</a>
                <a class="nav-link page-scroll" href="#testimonial" lang="es">Grabar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#portfolios" lang="pt">Galeria</a>
                <a class="nav-link page-scroll" href="#portfolios" lang="es">Galería</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#encontrar" lang="pt">Onde encontrar</a>
                <a class="nav-link page-scroll" href="#encontrar" lang="es">Donde encontrar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#contact" lang="pt">Contato</a>
                <a class="nav-link page-scroll" href="#contact" lang="es">Contacto</a>
              </li>
              <div class="social-icons " style="margin-top: auto; margin-bottom: auto;">
                <ul>
                  <li class="facebook"><a href="https://www.facebook.com/larevolucionn.br/" target="_blank" title="Acessar facebook da LRV"><i class="fa fa-facebook"></i></a></li>
                  <li class="google-plus"><a href="https://www.instagram.com/lrvbrasil/" target="_blank" title="Acessar instagram da LRV"><i class="fa fa-instagram"></i></a></li>
                </ul>
              </div>
            </ul>


            <div id="lang_selector" class="language-dropdown">
              <label for="toggle" class="lang-flag lang-pt" title="Selecione a linguagem" style="margin-top: 44px; margin-left: 30px;">
                <span class="flag"></span>
              </label>
              <ul class="lang-list" style="margin-left: 30px;">
                <li class="lang lang-es" title="EN">
                  <span class="flag"></span>
                </li>
                <li class="lang lang-pt selected" title="PT">
                  <span class="flag"></span>
                </li>
                
              </ul>
            </div>


          </div>
        </div>

        <div class="menu-overlay"></div>
        <button class="menu-open form-control" style="margin-left: 90%;">
          <i class="fa fa-bars" aria-hidden="true"></i>
        </button>

        <div class="side-menu-wrapper">
          <a style="font-size: 70px;" href="#" class="menu-close">×</a>
          <ul>
            <li>
              <a class="page-scroll lang" href="#home-area" rel="nofollow" lang="pt">Home</a>
              <a class="page-scroll lang" href="#home-area" rel="nofollow" lang="es">Home</a>
            </li>
            <li>
              <a class="page-scroll lang" href="#services" rel="nofollow" lang="pt">Sobre</a>
              <a class="page-scroll lang" href="#services" rel="nofollow" lang="es">Sobre nosotros</a>
            </li>
            <li>
              <a class="page-scroll lang" href="#culturaTabaco" rel="nofollow" lang="pt">Cultura do Tabaco</a>
              <a class="page-scroll lang" href="#culturaTabaco" rel="nofollow" lang="es">Cultura del tabaco</a>
            </li>
            <li>
              <a class="page-scroll lang" href="#a-revolucao" rel="nofollow" lang="pt">Produtos</a>
              <a class="page-scroll lang" href="#a-revolucao" rel="nofollow" lang="es">Nuestros productos</a>
            </li>
            <li>
              <a class="page-scroll lang" href="#testimonial" rel="nofollow" lang="pt">Registro</a>
              <a class="page-scroll lang" href="#testimonial" rel="nofollow" lang="es">Grabar</a>
            </li>
            <li>
              <a class="page-scroll lang" href="#portfolios" rel="nofollow" lang="pt">Galeria</a>
              <a class="page-scroll lang" href="#portfolios" rel="nofollow" lang="es">Galería</a>
            </li>
            <li>
              <a class="page-scroll lang" href="#encontrar" rel="nofollow" lang="pt">Onde encontrar</a>
              <a class="page-scroll lang" href="#encontrar" rel="nofollow" lang="es">Donde encontrar</a>
            </li>
            <li>
              <a class="page-scroll lang" href="#contact" rel="nofollow" lang="pt">Contato</a>
              <a class="page-scroll lang" href="#contact" rel="nofollow" lang="es">Contacto</a>
            </li>
            <ul style="display: inline-flex; margin-top: 15px;">
              <li class="facebook"><a href="https://www.facebook.com/larevolucionn.br/" style="background: #ddd0 !important; margin: 10px; color: #f1f1f1;" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li class="google-plus"><a href="https://www.instagram.com/lrvbrasil/" style="background: #ddd0 !important; margin: 10px; color: #f1f1f1;" target="_blank"><i class="fa fa-instagram"></i></a></li>
            </ul>
            <div id="lang_selector" class="language-dropdown" style="display: block;">
              <label for="toggle" class="lang-flag lang-pt" title="Selecione a linguagem" style="margin-top: 15px; margin-left: 10px;">
                <span class="flag"></span>
              </label>
              <ul class="lang-list" style="margin-left: 10px;">
                <li class="lang lang-es" title="EN">
                  <span class="flag"></span>
                </li>
                <li class="lang lang-pt selected" title="PT">
                  <span class="flag"></span>
                </li>
                
              </ul>
            </div>
          </ul>
        </div>

      </nav>

      <!-- <div class="header-content outer"> -->

      <div class="owl-carousel owl-theme ">
        <!-- <div class="owl-slide d-flex align-items-center cover img-carousel-2">
          <div class="overlay-carousel vertical-center">
            <div class="container">
              <div class="row justify-content-center justify-content-md-start">
                <div class="col-10 col-md-6 static">
                  <div class="owl-slide-text">
                    <h2 class="owl-slide-animated owl-slide-title">#LaOnça</h2>
                    <div class="owl-slide-animated owl-slide-subtitle mb-3">
                      One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->

        <div class="owl-slide d-flex align-items-center cover img-carousel-1">
        <!-- style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/owlcarousel2.jpg);" -->
          <div class="overlay-carousel vertical-center">
            <div class="container">
                <div class="row justify-content-center justify-content-md-start">
                  <div class="col-10 col-md-6 static">
                    <div class="owl-slide-text">
                      <h2 class="owl-slide-animated owl-slide-title">TABACO <img src="<?php echo url_site;?>img/LA REVOLUCION BRANCO.png" alt="LRV BRASIL TABACO" width="60%" height="auto"></h2>
                      <p class="owl-slide-animated owl-slide-subtitle mb-3 bold" lang="pt">O VERDADEIRO DESTALADO</p>
                      <p class="owl-slide-animated owl-slide-subtitle mb-3 bold" lang="es">EL VERDADERO INDEPENDIENTE</p>
                      <!-- <a class="btn btn-primary owl-slide-animated owl-slide-cta" href="https://unsplash.com/photos/Ijx8OxvKrgM" target="_blank" role="button">See Original Image</a> -->
                    </div>
                  </div>
                </div>
              </div>
          </div>  
        </div><!--/owl-slide-->

        <div class="owl-slide d-flex align-items-center cover img-carousel-3">
        <!-- style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/owlcarousel3.jpg);" -->
        <div class="overlay-carousel vertical-center">
          <div class="container">
            <div class="row justify-content-center justify-content-md-start">
              <div class="col-10 col-md-6 static">
                <div class="owl-slide-text">
                  <h1 class="owl-slide-animated owl-slide-title">CHEGOU AS PITEIRAS DE VIDRO <img class="img-fulid" src="<?php echo url_site;?>img/LRV BRANCO PNG.png" alt="LRV Logo" alt="LRV Logo" height="auto" width="40%" style="width: 40% !important;"></h1>
                  <p class="owl-slide-animated owl-slide-subtitle mb-3" lang="pt">Você já conhece as piteiras de vidro LRV? Foram desenvolvidas com a finalidade de auxiliar na redução de danos e preservação do meio ambiente além de ressaltar o sabor.</p>
                  <p class="owl-slide-animated owl-slide-subtitle mb-3" lang="es">¿Ya conoces las boquillas de cristal LRV? Fueron desarrollados con el propósito de ayudar en la reducción de daños y preservación del medio ambiente además de resaltar el sabor.</p>
                  <!-- <a class="btn btn-primary owl-slide-animated owl-slide-cta" href="https://unsplash.com/photos/7uwbhGSH5Fg" target="_blank" role="button">See Original Image</a> -->
                </div>
              </div>
            </div>
          </div>
        </div>
        </div><!--/owl-slide-->
      </div>
          
          <!-- <div class="row inner">
            <div class="col-sm-12">
              <div class="image-container ">
                <div id="divToAppend-first" class="text-container" style="text-align: center;">
                  <h1 id="h1-header-lrv-first" class="headStyle margin-85 section-subtitle p-style-header wow fadeInDown" data-wow-duration="600ms" data-wow-delay="0.3s"><span lang="pt">#LaOnça</span> <span lang="es">#LaOnça</span></h1>
                </div>
              </div>
            </div>
          </div> 
        </div>
        <div class="header-content outer ">
          <div class="row inner setarTextoAbaixo" >
            <div class="col-sm-12">
              <div class="image-container ">
                <div id="divToAppend-second" class="text-container" style="text-align: center;">
                  <h1 id="h1-segundo" class="headStyle section-subtitle p-style-header wow fadeInUp" data-wow-duration="600ms" data-wow-delay="400ms" ><span lang="pt">O Verdadeiro Destalado!</span> <span lang="es">EL VERDADERO INDEPENDIENTE!</span></h1>
                </div>
              </div>
            </div>
          </div>
        </div> -->
      <!-- </div> -->

    </header>

    <section id="services" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title wow fadeIn" data-wow-duration="600ms" data-wow-delay="0.5s"><span lang="pt">SOBRE A LRV BRASIL</span> <span lang="es">ACERCA DE LRV BRASIL</span></h2>
          <span class="lines wow zoomIn" data-wow-delay="0.3s"></span>
          <p class="section-subtitle wow fadeInDown" data-wow-duration="600ms" data-wow-delay="0.6s">
            <span lang="pt">Tudo começou quando três revolucionários se encantaram pela cultura do tabaco para enrolar na capital do país.</span> 
            <span lang="es">Todo comenzó cuando tres revolucionarios quedaron encantados con la cultura del tabaco para rodar en la capital del país.</span>
             
          </p>

          <p class="section-subtitle wow fadeInDown" data-wow-duration="600ms" data-wow-delay="0.7s">
          <span lang="pt">Com isso, viram a carência de um produto qualitativo no mercado, gerando incentivo para empreender, que sempre foi um sonho em comum.</span> 
          <span lang="es">Con esto, vieron la falta de un producto cualitativo en el mercado, generando un incentivo para emprender, que siempre ha sido un sueño común.</span>
            
          </p>
          <p class="section-subtitle wow fadeInDown" data-wow-duration="600ms" data-wow-delay="0.8s">
            <span lang="pt">
              Isso os motivou a realizarem uma jornada do Centro ao Sul do país, região onde a cultura do plantio de tabaco ocorre há séculos. 
              Essa aventura lhes proporcionou a oportunidade de <b class="bold">degustar</b> 
              diversos tipos e cortes de fumo.
            </span> 
            <span lang="es">
              Esto los motivó a emprender un viaje desde el centro hacia el sur del país, una región donde la cultura de la siembra de tabaco se lleva a cabo durante siglos.
              Esta aventura les brindó la oportunidad de <b class="bold">degustar</b> diferentes tipos y cortes de tabaco.
            </span>
            
          </p>
          <p class="section-subtitle wow fadeInDown" data-wow-duration="600ms" data-wow-delay="0.9s">
            <span lang="pt">
              Após um longo processo de seleção, foi escolhido o tabaco mais qualitativo do tipo Golden Virgínia para lançarmos o nosso primeiro produto: 
              o <b class="bold">La Revolución</b>, que possui como característica especial ser destalado à mão, tornando-o único.
            </span>
            <span lang="es">
              Luego de un largo proceso de selección, se eligió el tabaco tipo Golden Virgínia más cualitativo para lanzar nuestro 
              primer producto: <b class="bold">La Revolución</b>, que tiene la característica especial de ser cortado a mano, lo que lo hace único.
            </span>
            
          </p>
          <p class="section-subtitle wow fadeInDown" data-wow-duration="600ms" data-wow-delay="1.0s">
            <span lang="pt">
              Desde o início, sempre houve o sonho de revolucionar o mercado com produtos da mais alta qualidade, proporcionando experiências singulares aos 
              entusiastas da cultura.
            </span> 
            <span lang="es">
              Desde el principio, siempre ha existido el sueño de revolucionar el mercado con productos de la más alta calidad, 
              brindando experiencias únicas a los amantes de la cultura.
            </span> 
          </p>
          <p class="section-subtitle wow fadeInDown" data-wow-duration="600ms" data-wow-delay="1.1s">
            <span lang="pt">
              Durante toda essa jornada, houveram diversos desafios para encontrar o carro-chefe, pois não faltava ambição para possuir o melhor tabaco do mercado. 
              Desde o princípio, houve o compromisso de legalizar todos os produtos, visto que muitas marcas comercializam produtos ilegais e que podem ser danosos 
              aos consumidores. Isso mostra a preocupação da empresa com os clientes, pois sem a legalização, não há como o órgão regulatório saber quais as 
              substâncias que o fumo possui.
            </span> 
            <span lang="es">
              A lo largo de este viaje, hubo varios desafíos para encontrar el buque insignia, ya que no faltó la ambición de poseer 
              el mejor tabaco del mercado. Desde el principio, hubo un compromiso de legalizar todos los productos, ya que muchas 
              marcas comercializan productos ilegales que pueden ser perjudiciales para los consumidores. Esto muestra la preocupación 
              de la empresa con los clientes, porque sin legalización, no hay forma de que el organismo regulador sepa qué sustancias 
              tiene el tabaco.
            </span>
          </p>
          <p class="section-subtitle wow fadeInDown" data-wow-duration="600ms" data-wow-delay="1.2s">
          <span lang="pt">
            A onça foi designada como símbolo da LRV por ser um dos animais mais imponentes e fortes da fauna brasileira. <i>Vimos</i>, assim, grande identificação com 
            nossos ideais, pois <i>pretendemos</i> liderar o mercado nacional.
          </span> 
          <span lang="es">
            El jaguar fue designado como símbolo de la LRV porque es uno de los animales más imponentes y fuertes de la fauna brasileña. 
            <i>Así</i>, vimos una gran identificación con nuestros ideales, ya que lideramos el mercado nacional.
          </span>
            
          </p>
          <p class="section-subtitle wow fadeInDown" data-wow-duration="600ms" data-wow-delay="1.3s">
            <span lang="pt">
              Além disso, a onça representa nossas raízes, que jamais serão esquecidas, afinal, desejamos expor a cara do nosso país 
              nessa jornada de crescimento.
            </span> 
            <span lang="es">
              Además, el jaguar representa nuestras raíces, que nunca se olvidarán, después de todo, queremos exponer el rostro de 
              nuestro país en este camino de crecimiento.
            </span>
            
          </p>
          <p class="section-subtitle wow fadeInDown" data-wow-duration="600ms" data-wow-delay="1.4s">
            <span lang="pt">
              Somos ambiciosos e temos a pretensão de aumentar o nosso portfólio de produtos, gerando experiências únicas e sempre acompanhado dos nossos três pilares: 
              Qualidade, Legalidade e Transparência.
            </span> 
            <span lang="es">         
              Somos ambiciosos y pretendemos incrementar nuestro portafolio de productos, generando experiencias únicas y siempre 
              acompañadas de nuestros tres pilares: Calidad, Legalidad y Transparencia.
            </span>
            
          </p>

          <p class="section-subtitle wow fadeInDown bold" data-wow-duration="600ms" data-wow-delay="2.4s">
            <span lang="pt">Isso é LRV.</span> <span lang="es">Eso es LRV.</span>
          </p> 
        </div>
      </div>
    </section>

    <section id="valores" class="">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="0.4s">
              <div class="icon">
                <i class="fa fa-thumbs-o-up"></i>
              </div>
              <h4><span lang="pt">MISSÃO</span> <span lang="es">MISIÓN</span></h4>
              <p>
                <span lang="pt">Proporcionar experiências inigualáveis, lutando pela igualdade e inclusão social.</span> 
                <span lang="es">Brindar experiencias inigualables, luchando por la igualdad y la inclusión social.</span>
              </p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="0.7s">
              <div class="icon">
                <i class="fa fa-bullseye"></i>
              </div>
              <h4><span lang="pt">VISÃO</span> <span lang="es">VISTA</span></h4>
              <p>
                <span lang="pt">Sermos reconhecidos mundialmente pela qualidade e confiabilidade dos nossos produtos.</span> 
                <span lang="es">Ser reconocidos mundialmente por la calidad y confiabilidad de nuestros productos.</span>
              </p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="1.0s">
              <div class="icon">
                <i class="fa fa-certificate"></i>
              </div>
              <h4><span lang="pt"></span> <span lang="es">VALORES</span></h4>
              <p>
                <span lang="pt">Confiança, prazer em servir, respeito e resiliência.</span> 
                <span lang="es">Confianza, placer en servir, respeto y resiliencia.</span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <br><br>
    <section id="culturaTabaco" class="">
      <div class=" ">
        <div class="container ">
          <div class="section-header section" style="margin-bottom: 0px !important;">          
            <h1 class="section-title wow fadeIn" data-wow-duration="600ms" data-wow-delay="0.4s"><span lang="pt">Cultura do Tabaco</span> <span lang="es">Cultura del tabaco</span></h1>
            <span class="lines wow fadeIn" data-wow-duration="600ms" data-wow-delay="0.4s"></span>
            <div class="row">
              <div class="col-lg-12 col-sm-12 col-xs-12 box-item">
                <p class="section-subtitle wow fadeInDown" data-wow-duration="600ms" data-wow-delay="0.6s">
                  <span lang="pt">
                    O tabaco era usado pelos indígenas em rituais religiosos com o objetivo de purificar, contemplar, proteger e fortalecer os 
                    ímpetos guerreiros. Os termos tabacum e tabaco vêm do nome de um tipo de junco vazado que era usado pelos indígenas para inalar o fumo.
                  </span> 
                  <span lang="es">
                    El tabaco era utilizado por los indígenas en rituales religiosos con el fin de purificar, contemplar, proteger y 
                    fortalecer los impulsos guerreros. Los términos tabacum y tabaco provienen del nombre de un tipo de caña hueca que usaban los indígenas para inhalar humo.
                  </span>                  
                </p>
                <p class="section-subtitle wow fadeInUp" data-wow-duration="600ms" data-wow-delay="0.6s">
                  <span lang="pt">
                    Levado para a Europa nas navegações de Cristóvão Colombo, a rainha da França, Catarina de Médicis, passou a usar o fumo em pó para curar enxaquecas. 
                    O uso do tabaco para esta finalidade foi recomendado por Jean Nicot (vem daí o nome do seu princípio ativo, a nicotina). 
                  </span> 
                  <span lang="es">
                    Llevada a Europa en los viajes de Cristóbal Colón, la reina de Francia, Catalina de Médicis, comenzó a usar 
                    tabaco en polvo para curar las migrañas. Jean Nicot recomendó el uso de tabaco para este fin (de ahí el nombre de 
                    su ingrediente activo, nicotina).
                  </span>
                </p>
                  <a class="lrvLinkButton wow fadeInUp" data-wow-duration="600ms" data-wow-delay="0.8" href="historia-do-tabaco.php"><span lang="pt">Leia mais</span> <span lang="es">Lea mas</span></a>
              </div>
            </div>
          </div>
        </div>
    </div>
    </section>

    <section id="a-revolucao" class="section">
      <div class="container">
        <div class="section-header col-md-12">          
          <h1 class="section-title wow fadeIn" data-wow-duration="600ms" data-wow-delay="0.3s"><span lang="pt">NOSSOS PRODUTOS</span> <span lang="es">NUESTROS PRODUCTOS</span></h1>
          <span class="lines wow zoomIn" data-wow-delay="0.3s"></span>
            <p class="section-subtitle wow fadeInDown font-700" data-wow-duration="600ms" data-wow-delay="0.3s">
              <span lang="pt">
                “Não podemos aguardar que os tempos se modifiquem e nós nos modifiquemos junto, por uma revolução que chegue e nos leve em sua marcha. 
                Nós mesmos somos o futuro. Nós somos a revolução.”
              </span> 
              <span lang="es">               
                “No podemos esperar a que los tiempos cambien y cambiemos juntos, a una revolución que llegue y nos lleve en su marcha. 
                Nosotros mismos somos el futuro. Somos la revolución ”.
              </span>
              
            </p>
            <p class="section-subtitle wow fadeInUp font-700" data-wow-duration="600ms" data-wow-delay="0.3s">Beatrice Bruteau</p>
        </div>
        



        <section class="hero-section">
          <div class="card-grid justify-custom">
            <a class="card" href="produtos/la-revolucion">
              <div class="card__background" style="background-image: url(img/teste.jpg)"></div>
              <div class="card__content">
                <!-- <p class="card__category">Category</p> -->
                <h3 class="card__heading">Tabaco <img src="<?php echo url_site;?>img/LA REVOLUCION BRANCO.png" alt="LRV BRASIL TABACO" width="100%" height="auto"></h3>
              </div>
            </a>
            <a class="card" href="produtos/piteira">
              <div class="card__background" style="background-image: url(img/piteiras\ horizontal.png)"></div>
              <div class="card__content">
                <img src="<?php echo url_site;?>img/pirteiras logo branca-01.png" class="img-fluid margin-center" alt="LRV BRASIL TABACO" width="80%" height="auto">
              </div>
            </a>
          <div>
        </section>



        <!-- <div class="row">
          <div class="col-md-6 wow fadeInDown margin-bottom-15" data-wow-duration="600ms" data-wow-delay="0.5s">
            <div class="owl-carousel owl-theme">
                <div class="item"><img style="border-radius: 10px;" class="img-fluid" src="img/la-revolucion-tabaco-1-min.png" width="100%" height="auto" alt="CMA Escritório"></div>
                <div class="item"><img style="border-radius: 10px;" class="img-fluid" src="img/teste.jpg" width="100%" height="auto" alt="CMA Escritório"></div>
                <div class="item"><img style="border-radius: 10px;" class="img-fluid" src="img/lrv-slide-3-min.png" width="100%" height="auto" alt="CMA Escritório"></div>
                <div class="item"><img style="border-radius: 10px;" class="img-fluid" src="img/tabacoAr-min.jpg" width="100%" height="auto" alt="CMA Escritório"></div>
            </div>
          </div>

          <div class="col-md-6">
            <h1 class="wow fadeInDown" data-wow-duration="600ms" data-wow-delay="0.5s">Tabaco <img src="<?php echo url_site;?>img/LA REVOLUCION PNG.png" alt="LRV BRASIL TABACO" width="60%" height="auto"></h1>
            <p class="wow fadeInDown" data-wow-duration="600ms" data-wow-delay="0.7s">
              <span lang="pt">O Tabaco La Revolución é um fumo desfiado <b>Premium</b> do tipo Golden Virginia.</span> 
              <span lang="es">La Revolución Tobacco es un humo rallado Premium del tipo Golden Virginia.</span>
            </p>
            <p class="wow fadeInDown" data-wow-duration="600ms" data-wow-delay="0.9s">
              <span lang="pt">
                As folhas passam pelo processo de cura chamado Flue-Cured, que consiste no aquecimento em um ambiente controlado, para que ocorra a liberação 
                dos açúcares naturais e adquiram a coloração clara, além de seu aroma característico, marcas únicas do produto.
              </span> 
              <span lang="es">      
                Las hojas pasan por el proceso de curado denominado Flue-Cured, el cual consiste en calentar en un ambiente controlado, 
                para que se produzca la liberación de azúcares naturales y adquieran un color claro, además de su aroma característico, 
                marcas únicas del producto.
              </span>
              
            </p>
            <p class="wow fadeInUp" data-wow-duration="600ms" data-wow-delay="0.9s">
              <span lang="pt">
                Por fim, todas as folhas são minuciosamente selecionadas e <b>Destaladas à Mão</b>, o que faz com que os talos sejam eliminados, 
                tornando o tabaco extremamente limpo.
              </span> 
              <span lang="es">           
                Finalmente, todas las hojas se seleccionan <b>minuciosamente a mano</b>, lo que hace que se eliminen los tallos, 
                dejando el tabaco extremadamente limpio.
              </span>
            
            </p>
            <p class="wow fadeInUp" data-wow-duration="600ms" data-wow-delay="0.7s">
              <span lang="pt">
                Sua característica principal é proporcionar uma experiência <b>suave</b>, <b>autêntica</b> e <b>saborosa</b>.
              </span> 
              <span lang="es">
                Su principal característica es brindar una experiencia <b>suave</b>, <b>auténtica</b> y <b>sabrosa</b>.
              </span>
              
            </p>
            <br>
          </div>
        </div> -->
      </div>
    </section>

    <div id="testimonial" class="">
      <div class="masked ">
        <div class="container" style="padding-top: 80px; padding-bottom: 80px;">
          <div class="row">
            <div class="col-md-8">
              <h1 class="section-title wow fadeIn word-wrap" data-wow-duration="600ms" data-wow-delay="0.3s"><span lang="pt">REGISTRO</span> <span lang="es">GRABAR</span></h1>
              <div class="section-header" style="text-align:left;">
                <span class="lines wow zoomIn" data-wow-delay="0.3s"></span>
              </div>
              <p class="section-subtitle wow fadeInDown" data-wow-duration="600ms" data-wow-delay="0.3s">
                <span lang="pt">
                  A Agência Nacional de Vigilância Sanitária (ANVISA) é o órgão responsável pela regulamentação de produtos derivados do tabaco.
                </span> 
                <span lang="es">
                  La Agencia Nacional de Vigilancia Sanitaria (ANVISA) es el organismo responsable de la regulación de los productos del tabaco.
                </span>
              </p>
              <p class="section-subtitle wow fadeInDown" data-wow-duration="600ms" data-wow-delay="0.4s">
                <span lang="pt">Após o crescimento da cultura do tabaco para enrolar, fomos os precursores no êxito da conquista da legalidade no Centro do país.</span> 
                <span lang="es">Luego del crecimiento de la cultura del tabaco para rodar, fuimos los precursores en el éxito de la conquista de la legalidad en el centro del país.</span>
              </p>
              <p class="section-subtitle wow fadeInDown" data-wow-duration="600ms" data-wow-delay="0.5s">
                <span lang="pt">Combata a ilegalidade e valorize a <b style="text-transform:uppercase">transparência</b>.</span> 
                <span lang="es">Lucha contra la ilegalidad y valora la transparencia.</span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <section id="portfolios" class="section">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title wow fadeIn" data-wow-duration="600ms" data-wow-delay="0.3s"><span lang="pt">Galeria</span> <span lang="es">Galería</span></h2>
          <span class="lines wow zoomIn" data-wow-duration="600ms" data-wow-delay="0.3s"></span>
        </div>
        <div class="row justify-content-center wow fadeInDown" data-wow-duration="600ms" data-wow-delay="0.5s">
          <div class="col-md-12 col-sm-12">
            <div id="instafeed"></div>
          </div>
        </div>
      </div>
    </section>

    <section id="encontrar" class="masked-encontrar">
      <div class="masked">
        <div class="container" style="padding: 80px 0 80px 0;">
          <div class="section-header">          
            <h1 class="section-title wow fadeIn color-white" data-wow-duration="600ms" data-wow-delay="0.5s"><span lang="pt">ONDE ENCONTRAR</span> <span lang="es">DONDE ENCONTRAR</span></h1>
            <span class="lines wow zoomIn" data-wow-delay="0.3s"></span>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-2">
              <div class="form-group"> 
                <select class="form-control" name="ufMapa" id="ufMapa" style="height: auto !important;">
                    <option id="estadoOption" value="Estado" selected data-default>Estado</option>
                 </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <select name="cidadeMapa" class="form-control" id="cidadeMapa" style="height: auto !important;" required>
                    <option id="cidadeOption" value="Cidade" selected>Cidade</option>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <select name="tipoPontoMapa" class="form-control" id="tipoPontoMapa" style="height: auto !important;" required>
                    <option id="tipoOption" value="tipoPonto" selected>Tipo de ponto de venda</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-sm-12 col-md-3 no-padding" style="margin-bottom: 10px;">
              <div class="color-list">
                <div id="lrv-ponto-list">
                  
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-9 no-padding">
              <div id="map"></div>
            </div>
          </div>
          <br>
          <div class="row justify-content-center" style="text-align: center;">
            <div class="col-md-12 justify-content-center">
            <span lang="pt">
              <button type="button" class="btn btn-warning white-space-normal wow fadeInUp" data-wow-duration="600ms" data-wow-delay="0.8" onclick="redirecionarCadPonto()">Clique aqui para cadastrar seu ponto de venda</button>
            </span>
            <span lang="es">
              <button type="button" class="btn btn-warning white-space-normal wow fadeInUp" data-wow-duration="600ms" data-wow-delay="0.8" onclick="redirecionarCadPonto()">Registra tu punto de venta</button>
            </span>
            </div>
          </div>
        </div>

      </div>
    </section>

    <section id="contact" class="section" data-stellar-background-ratio="-0.2">      
      <div class="contact-form">
        <div class="container">
          <div class="section-header">
            <h2 class="section-title wow fadeIn" data-wow-duration="600ms" data-wow-delay="0.3s"><span lang="pt">CONTATO</span> <span lang="es">CONTACTO</span></h2>
            <span class="lines wow zoomIn" data-wow-duration="600ms" data-wow-delay="0.3s"></span>
          </div>

          <div class="row">     
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <div class="contact-us">
                <!-- <h3 class="wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Entre em contato</h3> -->
                <div class="contact-address">
                  <p class="wow fadeInLeft" data-wow-duration="600ms" data-wow-delay="0.5s">
                    <span lang="pt">Estamos à disposição para esclarecer dúvidas e sempre abertos à sugestões!</span> 
                    <span lang="es">¡Estamos disponibles para responder preguntas y siempre abiertos a sugerencias!</span>
                  </p>
                  <p class="phone wow fadeInLeft" data-wow-duration="600ms" data-wow-delay="0.6s">
                    <span lang="pt">Se prefirir, use o formulário ao lado para enviar a mensagem.</span> 
                    <span lang="es">Si lo prefiere, utilice el formulario al costado para enviar el mensaje.</span>
                  </p>
                  <a class="wow fadeInLeft" title="Enviar uma mensagem por email" href="mailto:contato@larevolucionbr.com" data-wow-duration="600ms" data-wow-delay="0.7s">
                  <i class="fa fa-envelope "></i><span>  contato@lrvbrasil.com</span></a>
                </div>
              </div>
            </div>     
            <div class="col-lg-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-duration="600ms" data-wow-delay="0.5s">
              <div class="contact-block">
                <form id="contactForm">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Seu nome" required data-error="Por favor, digite o seu nome">
                        <div class="help-block with-errors"></div>
                      </div>                                 
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" placeholder="Seu Email" id="email" class="form-control" name="name" required data-error="Por favor, digite o seu e-mail">
                        <div class="help-block with-errors"></div>
                      </div> 
                    </div>
                    <div class="col-md-12">
                      <div class="form-group"> 
                        <textarea class="form-control" id="message" placeholder="Sua mensagem" rows="8" data-error="Escreva sua mensagem" required></textarea>
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="submit-button text-center">
                        <button class="btn btn-common" id="submit" type="submit">Enviar</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div> 
                        <div class="clearfix"></div> 
                      </div>
                    </div>
                  </div>            
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>           
    </section>

    <footer>          
      <div class="container">
        <div class="row">
          <!-- Footer Links -->
          <div class="col-lg-8 col-sm-8 col-xs-12">
            <ul class="footer-links">
              <li>
                <a class="page-scroll" href="#home-area"><span lang="pt">Home</span> <span lang="es">Home</span></a>
              </li>
              <li>
                <a class="page-scroll" href="#services"><span lang="pt">Sobre</span> <span lang="es">Sobre nosotros</span></a>
              </li>
              <li>
                <a class="page-scroll" href="#culturaTabaco"><span lang="pt">Cultura do Tabaco</span> <span lang="es">Cultura del tabaco</span></a>
              </li>
              <li>
                <a class="page-scroll" href="#a-revolucao"><span lang="pt">Produtos</span> <span lang="es">Nuestros productos</span></a>
              </li>
              <li>
                <a class="page-scroll" href="#testimonial"><span lang="pt">Registro</span> <span lang="es">Grabar</span></a>
              </li>
              <li>
                <a class="page-scroll" href="#portfolios"><span lang="pt">Galeria</span> <span lang="es">Galería</span></a>
              </li>
              <li>
                <a class="page-scroll" href="#encontrar"><span lang="pt">Onde encontrar</span> <span lang="es">Donde encontrar</span></a>
              </li>
              <li>
                <a class="page-scroll" href="#contact"><span lang="pt">Contato</span> <span lang="es">Contacto</span></a>
              </li>
            </ul>
          </div>
          <div class="col-lg-4 col-xs-12">
            <img src="img/LRV BRANCO PNG.png" height="auto" width="20%" class="imgRodape" alt="lrv logo">
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
            <div class="copyright">
                <p>
                  <span lang="pt">© Copyright LRV Brasil 2020 Todos os direitos reservados</span> 
                  <span lang="es">© Copyright LRV Brasil 2020 Todos los derechos reservados</span>
                </p>  
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
    
    <div id="laRevolucionConfirmarIdade" class="overlayConfirm">
      <div class="imagemLRV">
        <div class="overlayConfirm-content">
          <a class="" style="font-weight: bold;"><span lang="pt">VOCÊ TEM MAIS DE 18 ANOS?</span> <span lang="es">¿ES MAYOR DE 18 AÑOS?</span></a>
          <div class="row commands lrv-buttons-age">
            <button class="text-center btn btn-success" onclick="closeNav()"
              style="margin-right: 30px; cursor: pointer; font-size: 25px;"><span lang="pt">Sim</span> <span lang="es">Si</span></button>
            <button class="text-center btn btn-danger" onclick="historyBack()"
              style="margin-left: 30px; cursor: pointer; font-size: 25px;"><span lang="pt">Não</span> <span lang="es">No</span></button>
          </div>
        </div>
      </div>
    </div>

    <!-- SCRIPT MAPA -->
    <script>
      var customLabel = {
        restaurant: {
          label: 'R'
        },
        bar: {
          label: 'B'
        },
        PEV: {
          label: 'PEV'
        },
        LEV: {
          label: 'LEV',
        },
        Cooperativas: {
          label: 'COP'
        },
        Comércios: {
          label: 'CME'
        },
        lixoreciclável: {
          label: 'LR'
        },
        Lixoeletrônico: {
          label: 'LE'
        },
        lixohospitalar: {
          label: 'LH'
        }
        


      };

      var pos_ini;
      var map, infoWindow, markerA, markerB, drag_pos;
      var posicaoUsuario;
      // var inicio = new google.maps.LatLng(-15.81443, -47.88816130000001);
      // var fim = new google.maps.LatLng(-15.814179, -47.903618);

      var directionsRenderer1, directionsRenderer2;
      function initMap() {
        var directionsService = new google.maps.DirectionsService;
        var directionsRenderer = new google.maps.DirectionsRenderer;
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -15.814432199999997, lng: -47.888157299999996},
          zoom: 13
        });
        infoWindow = new google.maps.InfoWindow;
        directionsRenderer1 = new google.maps.DirectionsRenderer({
            map: map,
            suppressMarkers: true
        });
        directionsRenderer2 = new google.maps.DirectionsRenderer({
            map: map,
            suppressMarkers: true,
            polylineOptions: {
                strokeColor: "green"
            }
        });
        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            pos_ini = pos;
            // infoWindow.setPosition(pos);
            var image = 'img/localizacaoAtual.png';
            var marker = new google.maps.Marker({
                    position: pos,
                    map: map,
                    icon: image
                });
                directionsRenderer.setMap(map);
            var infowincontent = document.createElement('div');
            var strong = document.createElement('strong');
            strong.textContent = 'Voce está aqui!'
            infowincontent.appendChild(strong);
            infowincontent.appendChild(document.createElement('br'));
            marker.addListener('click', function() {

              infoWindow.setContent(infowincontent);
              infoWindow.open(map, marker);
            });
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      


      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }

        downloadUrl('php/marcadores', function(data) {
          var xml = data.responseXML;
          var markers = xml.documentElement.getElementsByTagName('marker');
          Array.prototype.forEach.call(markers, function(markerElem) {
            // console.log(markerElem);
            var id = markerElem.getAttribute('id');
            var nome_loja = markerElem.getAttribute('nome_loja');
            var endereco = markerElem.getAttribute('endereco');
            var tipoPonto = markerElem.getAttribute('tipoPonto');
            var site = markerElem.getAttribute('site');
            var cep = markerElem.getAttribute('cep');
            var telefone_loja = markerElem.getAttribute('telefone_loja');
            var cidade = markerElem.getAttribute('cidade');

            var tipoRedeSocial = markerElem.getAttribute('tipoRedeSocial');
            var nomeRedeSocial = markerElem.getAttribute('nomeRedeSocial');

            var point = new google.maps.LatLng(
                parseFloat(markerElem.getAttribute('lat')),
                parseFloat(markerElem.getAttribute('lng')));

            var infowincontent = document.createElement('div');
            infowincontent.setAttribute('class', 'texto-centro');
            var strong = document.createElement('div');
            strong.textContent = nome_loja
            strong.setAttribute('class', 'title-maps');
            infowincontent.appendChild(strong);
            var text = document.createElement('text');
            text.textContent = endereco
            infowincontent.appendChild(text);
            infowincontent.appendChild(document.createElement('br'));

            var tipo = document.createElement('text');
            tipo.textContent = tipoPonto;
            infowincontent.appendChild(tipo);
            infowincontent.appendChild(document.createElement('br'));

            var city = document.createElement('text');
            city.textContent = cidade;
            infowincontent.appendChild(city);
            infowincontent.appendChild(document.createElement('br'));

            var tel = document.createElement('text');
            tel.textContent = telefone_loja;
            infowincontent.appendChild(tel);
            infowincontent.appendChild(document.createElement('br'));

            // var site = document.createElement('text');
            // site.textContent = site;
            // infowincontent.appendChild(site);
            // infowincontent.appendChild(document.createElement('br'));

            var distancia = document.createElement('text');
            distancia.setAttribute('id', 'distanciaPonto');
            infowincontent.appendChild(distancia);
            infowincontent.appendChild(document.createElement('br'));

            var tempoPonto = document.createElement('text');
            tempoPonto.setAttribute('id', 'tempoPonto');
            infowincontent.appendChild(tempoPonto);
            infowincontent.appendChild(document.createElement('br'));
            
            var typeSemEspaco = tipoPonto.replace(/\s/g, '');
            var icon = customLabel[typeSemEspaco] || {};
            var marker = new google.maps.Marker({
              map: map,
              position: point,
              label: icon.label
            });
            marker.addListener('click', function() {
              infoWindow.setContent(infowincontent);
              infoWindow.open(map, marker);
            });

            google.maps.event.addListener(marker, 'click', function(evt) {
                  var drag_pos1 = {
                      lat: evt.latLng.lat(),
                      lng: evt.latLng.lng()
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
                            $('#distanciaPonto').val(' ');
                            $('#tempoPonto').val(' ');
                            $('#distanciaPonto').append(response.rows[0].elements[0].distance.text);
                            $('#tempoPonto').append(response.rows[0].elements[0].duration.text);
                          }
                      }
                      var i = CalculaDistancia(pos_ini, drag_pos1);
              });
          });
        });

      }

      function calculateAndDisplayRoute(directionsService, directionsRenderer) {
        var waypts = [];
        var checkboxArray = document.getElementById('waypoints');
        for (var i = 0; i < checkboxArray.length; i++) {
          if (checkboxArray.options[i].selected) {
            waypts.push({
              location: checkboxArray[i].value,
              stopover: true
            });
          }
        }

        directionsService.route({
          origin: document.getElementById('start').value,
          destination: document.getElementById('end').value,
          waypoints: waypts,
          optimizeWaypoints: true,
          travelMode: 'DRIVING'
        }, function(response, status) {
          if (status === 'OK') {
            directionsRenderer.setDirections(response);
            var route = response.routes[0];
            var summaryPanel = document.getElementById('directions-panel');
            summaryPanel.innerHTML = '';
            // For each route, display summary information.
            for (var i = 0; i < route.legs.length; i++) {
              var routeSegment = i + 1;
              summaryPanel.innerHTML += '<b>Route Segment: ' + routeSegment +
                  '</b><br>';
              summaryPanel.innerHTML += route.legs[i].start_address + ' to ';
              summaryPanel.innerHTML += route.legs[i].end_address + '<br>';
              summaryPanel.innerHTML += route.legs[i].distance.text + '<br><br>';
            }
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      }

        
      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
      
      

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjchTw42oDieCVSdDFoKWw6Ua69xAf9AQ&callback=initMap"
    async defer></script>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="js/terceiros/jquery-min.js?v=1.4"></script>
    <script src="js/terceiros/popper.min.js?v=1.4"></script>
    <script src="js/terceiros/bootstrap.min.js?v=1.4"></script>
    <script src="js/terceiros/jquery.mask.min.js?v=1.4"></script>
    <script src="js/terceiros/owl.carousel.js?v=1.4"></script>    
    <script src="js/terceiros/jquery.stellar.min.js?v=1.4"></script>    
    <script src="js/terceiros/jquery.nav.js?v=1.4"></script>    
    <script src="js/terceiros/scrolling-nav.js?v=1.4"></script>    
    <script src="js/terceiros/jquery.easing.min.js?v=1.4"></script>    
    <script src="js/terceiros/smoothscroll.js?v=1.4"></script>    
    <!-- <script src="js/jquery.slicknav.min.js?v=1.4"></script>      -->
    <script src="js/terceiros/wow.js?v=1.4"></script>   
    <script src="js/terceiros/jquery.vide.js?v=1.4"></script>
    <script src="js/terceiros/jquery.counterup.min.js?v=1.4"></script>    
    <!-- <script src="js/jquery.magnific-popup.min.js?v=1.4"></script>     -->
    <script src="js/terceiros/waypoints.min.js?v=1.4"></script>    
    <script src="js/terceiros/form-validator.min.js?v=1.4"></script>
    <script src='js/terceiros/instafeed.min.js'></script>
    <script src="js/nosso/contact-form-script.js?v=1.4"></script>   
    <script src="js/nosso/main.js?v=1.4"></script>
    <script src="js/nosso/instafeed-script.js?v=1.4"></script>
    <script src="js/nosso/coleta.js?v=1.4"></script>
    <!-- <script src="js/nosso/locais.js?v=1.4"></script> -->
    <script src="js/nosso/login.js?v=1.4"></script>

  </body>
</html>