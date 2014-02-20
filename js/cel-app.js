$(document).foundation();

$(document).ready(function() {

  $('body').addClass('ready');

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
                      '</div>'+
                    '</div>',
          verticalGap:68,        
      }
  }); // end 

  // nl form
  var nlform = new NLForm( document.getElementById( 'nl-form' ) );
});

