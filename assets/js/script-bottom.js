$(document).ready(function(){

    // CAROUSEL MOBILIZE
    $('.cnt-thumbs-mobile').owlCarousel({
        items:1,
        merge:true,
        loop:true,
        autoplay:true,
        nav:false,
        dots:true,
        margin:10,
        lazyLoad:true,
        center:true,
        responsive:{
            480:{
                items:1
            },
            600:{
                items:1
            }
        }
    });

    // BOTÃO ABRIR MANIFESTO
    $('#btVerManifesto, #btVerManifestoDois').on('click', function() {
        $('#btVerManifestoDois').toggleClass("lnk-abrir-manifesto-ativo");
        $('.text-completo').toggleClass("text-completo-ativo");
        $('.cnt-texto-manifesto').toggleClass("cnt-texto-manifesto-ativo");
    });


    // MODAL 
    $('.open_modal').on('click', function() {
        $('.bg_modal').animate({'opacity':'0.60'}, 500);
        $('.box_modal').animate({'opacity':'1.0'}, 500);
        $('.bg_modal').css('display','block');
        $('.box_modal').css('display','block');

    });
    $('.close_modal').on('click', function() {
        $('.bg_modal').animate({'opacity':'0'}, 500);
        $('.box_modal').animate({'opacity':'0'}, 500);
        $('.bg_modal').css('display','none');
        $('.box_modal').css('display','none');

    });


    // SCROLL ANIMATE
    var $doc = $('html, body');
        $('.cnt-mn a').click(function() {
        $doc.animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 500);
        return false;
    });



    // MENU FIXO NO TOPO    
    var offset = $('#menuprincipal').offset().top;
    var $menuprincipal = $('#menuprincipal');
    $(document).on('scroll', function () {
        if (offset <= $(window).scrollTop()) {
            $menuprincipal.addClass('fixar');
        } else {
            $menuprincipal.removeClass('fixar');
        }
    });


    //CONHEÇA MEDIDAS
    //$('#clickMedidaUm').on('click', function() {
        //$('#clickMedidaUm').html("Hi");
        //alert("olá");
    //});


    $(".js-video-button").modalVideo({
        youtube:{
            controls: true,
            nocookie: true,
            autoplay: true
        }
    });




    $(window).on('load', function() { // makes sure the whole site is loaded 
        $('#status').fadeOut(); // will first fade out the loading animation 
        $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
        $('body').delay(350).css({'overflow':'visible'});
      })




      if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        $("#whatsForm").attr("href", "whatsapp://send?text=Acesse o nosso site: http://unidoscontraacorrupcao.org.br");
        $("#whatsVideo").attr("href", "whatsapp://send?text=https://youtu.be/3QgMp1yQriA");
        $("#whatsCompartilha").attr("href", "whatsapp://send?text=Acesse o nosso site: http://unidoscontraacorrupcao.org.br");
        $("#mobiResponsive").attr("href", "#mobilizeMob");
        //alert("é celular");
       }


});


