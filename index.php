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

    <title> LRV Brasil - O verdadeiro destalado!</title>

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
                <a class="nav-link page-scroll" href="#home-area">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#services">Sobre</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#culturaTabaco">Cultura do Tabaco</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#a-revolucao">A Revolução</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#testimonial">Registro</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#portfolios">Galeria</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#encontrar">Onde encontrar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#contact">Contato</a>
              </li>
            </ul>
            <div class="social-icons" style="margin-top: 0px !important; width: 110px; margin-left: 35px;">
              <ul>
                <li class="facebook"><a href="https://www.facebook.com/larevolucionn.br/" target="_blank" title="Acessar facebook da LRV"><i class="fa fa-facebook"></i></a></li>
                <li class="google-plus"><a href="https://www.instagram.com/lrvbrasil/" target="_blank" title="Acessar instagram da LRV"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="menu-overlay"></div>
        <button class="menu-open" style="margin-left: 90%;">
          <i class="fa fa-bars" aria-hidden="true"></i>
        </button>

        <div class="side-menu-wrapper">
          <a style="font-size: 70px;" href="#" class="menu-close">×</a>
          <ul>
            <li><a class="page-scroll" href="#home-area" rel="nofollow">Home</a></li>
            <li><a class="page-scroll" href="#services" rel="nofollow">Sobre</a></li>
            <li><a class="page-scroll" href="#culturaTabaco" rel="nofollow">Cultura do Tabaco</a></li>
            <li><a class="page-scroll" href="#a-revolucao" rel="nofollow">A Revolução</a></li>
            <li><a class="page-scroll" href="#testimonial" rel="nofollow">Registro</a></li>
            <li><a class="page-scroll" href="#portfolios" rel="nofollow">Galeria</a></li>
            <li><a class="page-scroll" href="#encontrar" rel="nofollow">Onde encontrar</a></li>
            <li><a class="page-scroll" href="#contact" rel="nofollow">Contato</a></li>
            <ul style="display: inline-flex; margin-top: 15px;">
              <li class="facebook"><a href="https://www.facebook.com/larevolucionn.br/" style="background: #ddd0 !important; margin: 10px;" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li class="google-plus"><a href="https://www.instagram.com/lrvbrasil/" style="background: #ddd0 !important; margin: 10px;" target="_blank"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </ul>
        </div>

      </nav>

      <div class="header-content outer">

        <div class="container ">
          <div class="row inner">
            <div class="col-sm-12">
              <div class="image-container ">
                <div id="divToAppend-first" class="text-container" style="text-align: center;">
                  <h1 id="h1-header-lrv-first" class="headStyle margin-85 section-subtitle p-style-header wow fadeInDown" data-wow-duration="600ms" data-wow-delay="0.3s">#LaOnça</h1>
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
                  <h1 id="h1-segundo" class="headStyle section-subtitle p-style-header wow fadeInUp" data-wow-duration="600ms" data-wow-delay="400ms">O Verdadeiro Destalado!</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </header>

    <section id="services" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title wow fadeIn" data-wow-duration="600ms" data-wow-delay="0.5s">SOBRE A LRV BRASIL</h2>
          <span class="lines wow zoomIn" data-wow-delay="0.3s"></span>
          <p class="section-subtitle wow fadeInDown" data-wow-duration="600ms" data-wow-delay="0.6s">
            Tudo começou quando três revolucionários se encantaram pela cultura do tabaco para enrolar na capital do país. 
          </p>
          <p class="section-subtitle wow fadeInDown" data-wow-duration="600ms" data-wow-delay="0.7s">
            Com isso, viram a carência de um produto qualitativo no mercado, gerando incentivo para empreender, que sempre foi um sonho em comum.
          </p>
          <p class="section-subtitle wow fadeInDown" data-wow-duration="600ms" data-wow-delay="0.8s">
            Isso os motivou a realizarem uma jornada do Centro ao Sul do país, região onde a cultura do plantio de tabaco ocorre há séculos. 
            Essa aventura lhes proporcionou a oportunidade de <b class="bold">degustar</b> 
            diversos tipos e cortes de fumo.
          </p>
          <p class="section-subtitle wow fadeInDown" data-wow-duration="600ms" data-wow-delay="0.9s">
            Após um longo processo de seleção, foi escolhido o tabaco mais qualitativo do tipo Golden Virgínia para lançarmos o nosso primeiro produto: 
            o <b class="bold">La Revolución</b>, que possui como característica especial ser destalado à mão, tornando-o único.
          </p>
          <p class="section-subtitle wow fadeInDown" data-wow-duration="600ms" data-wow-delay="1.0s">
            Desde o início, sempre houve o sonho de revolucionar o mercado com produtos da mais alta qualidade, proporcionando experiências singulares aos 
            entusiastas da cultura.
          </p>
          <p class="section-subtitle wow fadeInDown" data-wow-duration="600ms" data-wow-delay="1.1s">
            Durante toda essa jornada, houveram diversos desafios para encontrar o carro-chefe, pois não faltava ambição para possuir o melhor tabaco do mercado. 
            Desde o princípio, houve o compromisso de legalizar todos os produtos, visto que muitas marcas comercializam produtos ilegais e que podem ser danosos 
            aos consumidores. Isso mostra a preocupação da empresa com os clientes, pois sem a legalização, não há como o órgão regulatório saber quais as 
            substâncias que o fumo possui.
          </p>
          <p class="section-subtitle wow fadeInDown" data-wow-duration="600ms" data-wow-delay="1.2s">
            A onça foi designada como símbolo da LRV por ser um dos animais mais imponentes e fortes da fauna brasileira. <i>Vimos</i>, assim, grande identificação com 
            nossos ideais, pois <i>pretendemos</i> liderar o mercado nacional.
          </p>
          <p class="section-subtitle wow fadeInDown" data-wow-duration="600ms" data-wow-delay="1.3s">
            Além disso, a onça representa nossas raízes, que jamais serão esquecidas, afinal, desejamos expor a cara do nosso país nessa jornada de crescimento.
          </p>
          <p class="section-subtitle wow fadeInDown" data-wow-duration="600ms" data-wow-delay="1.4s">
            Somos ambiciosos e temos a pretensão de aumentar o nosso portfólio de produtos, gerando experiências únicas e sempre acompanhado dos nossos três pilares: 
            Qualidade, Legalidade e Transparência.
          </p>

          <p class="section-subtitle wow fadeInDown bold" data-wow-duration="600ms" data-wow-delay="2.4s">Isso é LRV.</p> 
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
              <h4>MISSÃO</h4>
              <p>Proporcionar experiências inigualáveis, lutando pela igualdade e inclusão social.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="0.7s">
              <div class="icon">
                <i class="fa fa-bullseye"></i>
              </div>
              <h4>VISÃO</h4>
              <p>Sermos reconhecidos mundialmente pela qualidade e confiabilidade dos nossos produtos.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="1.0s">
              <div class="icon">
                <i class="fa fa-certificate"></i>
              </div>
              <h4>VALORES</h4>
              <p>Confiança, prazer em servir, respeito e resiliência.</p>
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
            <h1 class="section-title wow fadeIn" data-wow-duration="600ms" data-wow-delay="0.4s">Cultura do Tabaco</h1>
            <span class="lines wow fadeIn" data-wow-duration="600ms" data-wow-delay="0.4s"></span>
            <div class="row">
              <div class="col-lg-12 col-sm-12 col-xs-12 box-item">
                <p class="section-subtitle wow fadeInDown" data-wow-duration="600ms" data-wow-delay="0.6s">
                  O tabaco era usado pelos indígenas em rituais religiosos com o objetivo de purificar, contemplar, proteger e fortalecer os 
                  ímpetos guerreiros. Os termos tabacum e tabaco vêm do nome de um tipo de junco vazado que era usado pelos indígenas para inalar o fumo.
                </p>
                <p class="section-subtitle wow fadeInUp" data-wow-duration="600ms" data-wow-delay="0.6s">
                  Levado para a Europa nas navegações de Cristóvão Colombo, a rainha da França, Catarina de Médicis, passou a usar o fumo em pó para curar enxaquecas. 
                  O uso do tabaco para esta finalidade foi recomendado por Jean Nicot (vem daí o nome do seu princípio ativo, a nicotina). 
                </p>
                  <a class="lrvLinkButton wow fadeInUp" data-wow-duration="600ms" data-wow-delay="0.8" href="historia-do-tabaco.php">Leia mais</a>
              </div>
              <!-- <div class="col-md-6 col-xs-12 col-xs-12 ">
                <img class="img-fluid wow fadeInRight" height="auto" width="60%" src="img/tabaco-duplo-reduzido.png" alt="LRV BRASIL TABACOS" data-wow-duration="2000ms" data-wow-delay="0.6s">
              </div> -->
            </div>
          </div>
        </div>
    </div>
    </section>

    <section id="a-revolucao" class="section">
      <div class="container">
        <div class="section-header col-md-12">          
          <h1 class="section-title wow fadeIn" data-wow-duration="600ms" data-wow-delay="0.3s">A REVOLUÇÃO</h1>
          <span class="lines wow zoomIn" data-wow-delay="0.3s"></span>
            <p class="section-subtitle wow fadeInDown font-700" data-wow-duration="600ms" data-wow-delay="0.3s">
              “Não podemos aguardar que os tempos se modifiquem e nós nos modifiquemos junto, por uma revolução que chegue e nos leve em sua marcha. 
              Nós mesmos somos o futuro. Nós somos a revolução.”
            </p>
            <p class="section-subtitle wow fadeInUp font-700" data-wow-duration="600ms" data-wow-delay="0.3s">Beatrice Bruteau</p>
        </div>

        <div class="row">
          <div class="col-md-6 wow fadeInDown margin-bottom-15" data-wow-duration="600ms" data-wow-delay="0.5s">
            <!-- <div class="hero-slider" data-carousel-lrv style="border-radius: 20px;">
              <div class="carousel-cell" style="background-image:url(img/la-revolucion-tabaco-1-min.png);">
                <div class="overlay"></div>
              </div>
              <div class="carousel-cell" style="background-image:url(img/lrv-tabaco-1-min.jpg);">
                <div class="overlay"></div>
              </div>
              <div class="carousel-cell" style="background-image:url(img/lrv-slide-3-min.png);">
                <div class="overlay"></div>
              </div>
              <div class="carousel-cell" style="background-image:url(img/tabacoAr-min.jpg);">
                <div class="overlay"></div>
              </div>
            </div> -->
            <div class="owl-carousel owl-theme">
                <div class="item"><img style="border-radius: 10px;" class="img-fluid" src="img/la-revolucion-tabaco-1-min.png" width="100%" height="auto" alt="CMA Escritório"></div>
                <div class="item"><img style="border-radius: 10px;" class="img-fluid" src="img/teste.jpg" width="100%" height="auto" alt="CMA Escritório"></div>
                <div class="item"><img style="border-radius: 10px;" class="img-fluid" src="img/lrv-slide-3-min.png" width="100%" height="auto" alt="CMA Escritório"></div>
                <div class="item"><img style="border-radius: 10px;" class="img-fluid" src="img/tabacoAr-min.jpg" width="100%" height="auto" alt="CMA Escritório"></div>
            </div>
          </div>

          <div class="col-md-6">
            <h1 class="wow fadeInDown" data-wow-duration="600ms" data-wow-delay="0.5s">Tabaco <img src="<?php echo url_site;?>img/LA REVOLUCION PNG.png" alt="LRV BRASIL TABACO" width="60%" height="auto"></h1>
            <p class="wow fadeInDown" data-wow-duration="600ms" data-wow-delay="0.7s">O Tabaco La Revolución é um fumo desfiado <b>Premium</b> do tipo Golden Virginia.</p>
            <p class="wow fadeInDown" data-wow-duration="600ms" data-wow-delay="0.9s">As folhas passam pelo processo de cura chamado Flue-Cured, que consiste no aquecimento em um ambiente controlado, para que ocorra a liberação 
              dos açúcares naturais e adquiram a coloração clara, além de seu aroma característico, marcas únicas do produto.</p>
            <p class="wow fadeInUp" data-wow-duration="600ms" data-wow-delay="0.9s">Por fim, todas as folhas são minuciosamente selecionadas e <b>Destaladas à Mão</b>, o que faz com que os talos sejam eliminados, 
              tornando o tabaco extremamente limpo.</p>
            <p class="wow fadeInUp" data-wow-duration="600ms" data-wow-delay="0.7s">Sua característica principal é proporcionar uma experiência <b>suave</b>, <b>autêntica</b> e <b>saborosa</b>.</p>
            <br>
          </div>
        </div>
      </div>
    </section>

    <div id="testimonial" class="">
      <div class="masked ">
        <div class="container" style="padding-top: 80px; padding-bottom: 80px;">
          <div class="row">
            <div class="col-md-8">
              <h1 class="section-title wow fadeIn word-wrap" data-wow-duration="600ms" data-wow-delay="0.3s">REGISTRO</h1>
              <div class="section-header" style="text-align:left;">
                <span class="lines wow zoomIn" data-wow-delay="0.3s"></span>
              </div>
              <p class="section-subtitle wow fadeInDown" data-wow-duration="600ms" data-wow-delay="0.3s">
                A Agência Nacional de Vigilância Sanitária (ANVISA) é o órgão responsável pela regulamentação de produtos derivados do tabaco.
              </p>
              <p class="section-subtitle wow fadeInDown" data-wow-duration="600ms" data-wow-delay="0.4s">
                Após o crescimento da cultura do tabaco para enrolar, fomos os precursores no êxito da conquista da legalidade no Centro do país.
              </p>
              <p class="section-subtitle wow fadeInDown" data-wow-duration="600ms" data-wow-delay="0.5s">
                Combata a ilegalidade e valorize a <b style="text-transform:uppercase">transparência</b>.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <section id="portfolios" class="section">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title wow fadeIn" data-wow-duration="600ms" data-wow-delay="0.3s">Galeria</h2>
          <span class="lines wow zoomIn" data-wow-duration="600ms" data-wow-delay="0.3s"></span>
        </div>
        <div class="row justify-content-center wow fadeInDown" data-wow-duration="600ms" data-wow-delay="0.5s">
          <div class="col-md-12 col-sm-12">
            <div id="instafeed"></div>

          </div>

          <!-- <div class="container">          
            <div class="gallery-wrap">
              <div class="item item-1"></div>
              <div class="item item-2"></div>
              <div class="item item-3"></div>
              <div class="item item-4"></div>
              <div class="item item-5"></div>
              <div class="item item-6"></div>
            </div>
          </div> -->
        </div>
      </div>
    </section>

    <section id="encontrar" class="masked-encontrar">
      <div class="masked">
        <div class="container" style="padding: 80px 0 80px 0;">
          <div class="section-header">          
            <h1 class="section-title wow fadeIn color-white" data-wow-duration="600ms" data-wow-delay="0.5s">ONDE ENCONTRAR</h1>
            <span class="lines wow zoomIn" data-wow-delay="0.3s"></span>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-2">
              <div class="form-group"> 
                <select class="form-control" name="ufMapa" id="ufMapa" style="height: auto !important;">
                    <option value="Estado" selected data-default>Estado</option>
                 </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <select name="cidadeMapa" class="form-control" id="cidadeMapa" style="height: auto !important;" required>
                    <option value="Cidade" selected>Cidade</option>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <select name="tipoPontoMapa" class="form-control" id="tipoPontoMapa" style="height: auto !important;" required>
                    <option value="tipoPonto" selected>Tipo de ponto de venda</option>
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
              <button type="button" class="btn btn-warning white-space-normal wow fadeInUp" data-wow-duration="600ms" data-wow-delay="0.8" onclick="redirecionarCadPonto()">Clique aqui para cadastrar seu ponto de venda</button>
            </div>
          </div>
        </div>

      </div>
    </section>

    <section id="contact" class="section" data-stellar-background-ratio="-0.2">      
      <div class="contact-form">
        <div class="container">
          <div class="section-header">
            <h2 class="section-title wow fadeIn" data-wow-duration="600ms" data-wow-delay="0.3s">CONTATO</h2>
            <span class="lines wow zoomIn" data-wow-duration="600ms" data-wow-delay="0.3s"></span>
          </div>

          <div class="row">     
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <div class="contact-us">
                <!-- <h3 class="wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Entre em contato</h3> -->
                <div class="contact-address">
                  <p class="wow fadeInLeft" data-wow-duration="600ms" data-wow-delay="0.5s">Estamos à disposição para esclarecer dúvidas e sempre abertos à sugestões!</p>
                  <p class="phone wow fadeInLeft" data-wow-duration="600ms" data-wow-delay="0.6s">Se prefirir, use o formulário ao lado para enviar a mensagem.</p>
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
                <a class="page-scroll" href="#home-area">Home</a>
              </li>
              <li>
                <a class="page-scroll" href="#services">Sobre</a>
              </li>
              <li>
                <a class="page-scroll" href="#culturaTabaco">Cultura do Tabaco</a>
              </li>
              <li>
                <a class="page-scroll" href="#a-revolucao">A Revolução</a>
              </li>
              <li>
                <a class="page-scroll" href="#testimonial">Registro</a>
              </li>
              <li>
                <a class="page-scroll" href="#portfolios">Galeria</a>
              </li>
              <li>
                <a class="page-scroll" href="#encontrar">Onde encontrar</a>
              </li>
              <li>
                <a class="page-scroll" href="#contact">Contato</a>
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
    
    <div id="laRevolucionConfirmarIdade" class="overlayConfirm">
      <div class="imagemLRV">
        <div class="overlayConfirm-content">
          <a class="" style="font-weight: bold;">VOCÊ TEM MAIS DE 18 ANOS?</a>
          <div class="row commands lrv-buttons-age">
            <button class="text-center btn btn-success" onclick="closeNav()"
              style="margin-right: 30px; cursor: pointer; font-size: 25px;">Sim</button>
            <button class="text-center btn btn-danger" onclick="historyBack()"
              style="margin-left: 30px; cursor: pointer; font-size: 25px;">Não</button>
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