(function($) {

 
    /* 
   One Page Navigation & wow js
   ========================================================================== */
    //Initiat WOW JS
    new WOW().init();

    // one page navigation 
    $('.main-navigation').onePageNav({
            currentClass: 'active'
    }); 

    $(window).on('load', function() {
       
        $('body').scrollspy({
            target: '.navbar-collapse',
            offset: 195
        });
    });

    // Slick Nav 
    // $('.mobile-menu').slicknav({
    //   prependTo: '.navbar-header',
    //   parentTag: 'span',
    //   allowParentLinks: true,
    //   duplicate: false,
    //   closeOnClick: true,
    //   label: '',
    // });

    var slide_wrp 		= ".side-menu-wrapper"; //Menu Wrapper
    var open_button 	= ".menu-open"; //Menu Open Button
    var close_button 	= ".menu-close"; //Menu Close Button
    var overlay 		= ".menu-overlay"; //Overlay

    //Initial menu position
    $(slide_wrp).hide().css( {"right": -$(slide_wrp).outerWidth()+'px'}).delay(50).queue(function(){$(slide_wrp).show()}); 

    $(open_button).click(function(e){ //On menu open button click
      e.preventDefault();
      $(slide_wrp).css( {"right": "0px"}); //move menu right position to 0
      setTimeout(function(){
        $(slide_wrp).addClass('active'); //add active class
      },50);
      $(overlay).css({"opacity":"1", "width":"100%"});
    });

    $(close_button).click(function(e){ //on menu close button click
      e.preventDefault();
      $(slide_wrp).css( {"right": -$(slide_wrp).outerWidth()+'px'}); //hide menu by setting right position 
      setTimeout(function(){
        $(slide_wrp).removeClass('active'); // remove active class
      },50);
      $(overlay).css({"opacity":"0", "width":"0"});
    });

    $(document).on('click', function(e) { //Hide menu when clicked outside menu area
      if (!e.target.closest(slide_wrp) && $(slide_wrp).hasClass("active")){ // check menu condition
        $(slide_wrp).css( {"right": -$(slide_wrp).outerWidth()+'px'}).removeClass('active');
        $(overlay).css({"opacity":"0", "width":"0"});
      }
    });
    
/*  Owl Carousel Clientes */
    var owl = $(".touch-slider");
    owl.owlCarousel({
      navigation: false,
      pagination: true,
      slideSpeed: 1000,
      stopOnHover: true,
      autoPlay: true,
      items: 2,
      itemsDesktop : [1199,2],
      itemsDesktopSmall: [1024, 2],
      itemsTablet: [600, 1],
      itemsMobile: [479, 1]
    });

    $('.touch-slider').find('.owl-prev').html('<i class="fa fa-chevron-left"></i>');
    $('.touch-slider').find('.owl-next').html('<i class="fa fa-chevron-right"></i>');

    var options = {
      prevNextButtons: true,
      pauseAutoPlayOnHover: false,
      autoPlay: 6000,
      freeScroll: false,
      wrapAround: true,
      accessibility: true,
      pageDots: true,
      setGallerySize: false,
      fullscreen: true,
      
      arrowShape: {
        x0: 10,
        x1: 60,
        y1: 50,
        x2: 60,
        y2: 45,
        x3: 15
      }
    };
      
    if(window.location.href.indexOf('historia-do-tabaco') == -1 && 
    window.location.href.indexOf('cadastrar-ponto') == -1 && 
    window.location.href.indexOf('login') == -1 &&
    window.location.href.indexOf('lista-de-pontos') == -1 &&
    window.location.href.indexOf('pdv-ativos') == -1 && 
    window.location.href.indexOf('edit-pdv') == -1){
      
      // var carousel = document.querySelector('[data-carousel-lrv]');
      // var slides = document.getElementsByClassName('#a-revolucao carousel-cell');
      // var flkty = new Flickity(carousel, options);

      $(".owl-carousel").owlCarousel({
        items:1,
        autoplay:true,
        margin:30,
        loop:true,
        center: true,
        dots:true,
        nav:false,
        autoplayTimeout: 15500,
        // autoHeight:true
      //  navText:["<i class='fas fa-long-arrow-alt-left'></i>","<i class='fas fa-long-arrow-alt-right'></i>" ]
    });

      
      // flkty.on('scroll', function () {
      // flkty.slides.forEach(function (slide, i) {
      //   var image = slides[i];
      //   var x = (slide.target + flkty.x) * -1/3;
      // //   image.style.backgroundPosition = x + 'px';
      // });
      // });
    }

  /* 
   SMOOTH SCROLL
   ========================================================================== */
    var scrollAnimationTime = 1200,
        scrollAnimation = 'easeInOutExpo';

    $('a.scrollto').on('bind', 'click.smoothscroll', function (event) {
        event.preventDefault();
        var target = this.hash;
        
        $('html, body').stop().animate({
            'scrollTop': $(target).offset().top
        }, scrollAnimationTime, scrollAnimation, function () {
            window.location.hash = target;
        });
    });

/* 
   Back Top Link
   ========================================================================== */
    var offset = 200;
    var duration = 500;
    $(window).scroll(function() {
      if ($(this).scrollTop() > offset) {
        $('.back-to-top').fadeIn(400);
      } else {
        $('.back-to-top').fadeOut(400);
      }
    });

    $('.back-to-top').on('click',function(event) {
      event.preventDefault();
      $('html, body').animate({
        scrollTop: 0
      }, 600);
      return false;
    })

    
  $('#loader').fadeOut();
  if(window.location.href.indexOf('login') == -1 &&
  window.location.href.indexOf('lista-de-pontos') == -1 &&
  window.location.href.indexOf('pdv-ativos') == -1 &&
  window.location.href.indexOf('edit-pdv') == -1 ){
    setTimeout(function(){


      var today = new Date();
      var dd = String(today.getDate()).padStart(2, '0');
      var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
      var yyyy = today.getFullYear();
      
      today = yyyy + '/' + mm + '/' + dd;

      
      dataStorage = localStorage.getItem('sessao')
      data = new Date(dataStorage);
      newData = new Date(today);
      var diferencaSessao = Math.abs(newData - data);
      var diaSessao = 1000*60*60*24;
      var totalDiferenca = Math.round(diferencaSessao/diaSessao);
      

      if(totalDiferenca >= 1){
        localStorage.removeItem('sessao');
        openNav();
      }
    }, 1000);

  }

  var urlCollapse = window.location.hash.split('#');
  
  if(urlCollapse.length > 1){
    $('html, body').animate({
        scrollTop: $(`#${urlCollapse[1]}`).offset().top
    }, 600);
  }
  
  if(window.location.hash) {
    history.replaceState(null, null, ' ');
  }


  
  
  
}(jQuery));

function openNav() {
  document.getElementById("laRevolucionConfirmarIdade").style.width = "100%";
  $('html').addClass('noOverflow');
}

function closeNav() {
  var today = new Date();
  var dd = String(today.getDate()).padStart(2, '0');
  var mm = String(today.getMonth() + 1).padStart(2, '0');
  var yyyy = today.getFullYear();
  
  today = yyyy + '/' + mm + '/' + dd;

  localStorage.setItem('sessao', today);
  
  $('.overlayConfirm-content').hide('slow');
  document.getElementById("laRevolucionConfirmarIdade").style.width = "0%";
  $('html').removeClass('noOverflow');

  if ($('.wow').hasClass('animated')) {
    $(this).removeClass('animated');
    $(this).removeAttr('style');
    new WOW().init();
  }
}

function historyBack(){
	window.history.go(-1)
}

//valida numero inteiro com mascara
function mascaraInteiro(){
  if (event.keyCode < 48 || event.keyCode > 57){
          event.returnValue = false;
          return false;
  }
  return true;
}

function MascaraCep(cep){
  if(mascaraInteiro(cep)==false){
      event.returnValue = false;
  }       
  return formataCampo(cep, '00000-000', event);
}

function formataCampo(campo, Mascara, evento) { 
  var boleanoMascara; 

  var Digitato = evento.keyCode;
  exp = /\-|\.|\/|\(|\)| /g
  campoSoNumeros = campo.toString().replace( exp, "" ); 

  var posicaoCampo = 0;    
  var NovoValorCampo="";
  var TamanhoMascara = campoSoNumeros.length;; 

  if (Digitato != 8) { // backspace 
          for(i=0; i<= TamanhoMascara; i++) { 
                  boleanoMascara  = ((Mascara.charAt(i) == "-") || (Mascara.charAt(i) == ".")
                                                          || (Mascara.charAt(i) == "/")) 
                  boleanoMascara  = boleanoMascara || ((Mascara.charAt(i) == "(") 
                                                          || (Mascara.charAt(i) == ")") || (Mascara.charAt(i) == " ")) 
                  if (boleanoMascara) { 
                          NovoValorCampo += Mascara.charAt(i); 
                            TamanhoMascara++;
                  }else { 
                          NovoValorCampo += campoSoNumeros.charAt(posicaoCampo); 
                          posicaoCampo++; 
                    }              
            }      
          campo.value = NovoValorCampo;
          return NovoValorCampo; 
  }else { 
          return true; 
  }
}

function redirecionarCadPonto(){
  window.open('cadastrar-ponto.php', '_blank');
}