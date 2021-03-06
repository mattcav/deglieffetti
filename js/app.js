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

});

   


