$(document).foundation();

$(document).ready(function() {

  $('body').addClass('ready');

  // single gallery - to be checked!!!
  if($( window ).width() > 768) {
    var panels = $(".slider__panel"),
        img_num = panels.length,
        sliding_per = (100 / img_num);
    sliding_width = sliding_per + '%';
    panels.css('width', sliding_width);
  }

  // img popup
  $('.img-popup').magnificPopup({ 
    type: 'image',
    mainClass: 'mfp-with-zoom', // this class is for CSS animation below

    zoom: {
      enabled: true, // By default it's false, so don't forget to enable it

      duration: 300, // duration of the effect, in milliseconds
      easing: 'ease-in-out', // CSS transition easing function 

          opener: function(openerElement) {
            return openerElement.is('img') ? openerElement : openerElement.find('img');
          }
      },
      
      image: {
          markup: '<div class="mfp-figure">'+
                      '<div class="mfp-close"></div>'+
                      '<div class="mfp-img"></div>'+
                      '<div class="mfp-bottom-bar text-center">'+
                       '<div class="mfp-title"></div>'+
                       '<button id="mfp-info" class="mfp-info button small">more info</button>'+
                      '</div>'+
                      
                    '</div>',
          verticalGap:68,        
      }
  });

  jQuery.extend(verge);
  var win = $(window);
  var allMods = $(".coming");

  win.scroll(function(event) {
    allMods.each(function(i, el) {   
      var el = $(el);   
      //if (el.visible(true)) {
      if($.inViewport(el)) {  
        el.addClass("come-in");
        } 
    });
  });


//parallax
  $(window).scroll(function() {
    // if(Modernizr.touch)
    //   return;
    var scroll = $(window).scrollTop();
    var scroll1 = scroll + 5000;
    //console.log(scroll1);
    var visual = $('#home-visual__img');
    visual.css("transform","translateY(" +  (scroll/2.3)  + "px) scale(" +  scroll1/5000  + ")");
  });   

// end documentReady  
});

 $('body').on('click', '.mfp-info', function () {            
        $.magnificPopup.close();
        title = $('.mfp-title').html();
        //console.log(title);
        $('#mfp-title').val(title); 
        setTimeout(
            function(){
              $('#contact-modal').data('reveal-init', {
                  animation: 'fadeAndPop',
                  animation_speed: 250,
                  close_on_background_click: false,
                  close_on_esc: false,
                  dismiss_modal_class: 'close-reveal-modal',
                  bg_class: 'reveal-modal-bg',
                  bg : $('.reveal-modal-bg'),
                  css : {
                      open : {
                          'opacity': 0,
                          'visibility': 'visible',
                          'display' : 'block'
                      },
                      close : {
                          'opacity': 1,
                          'visibility': 'hidden',
                          'display': 'none'
                      }
                  }
              });
              $('#contact-modal').foundation('reveal', 'open');
            }
            ,300);
    }); 

   


