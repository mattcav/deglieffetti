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
                       '<button id="mfp-info" class="mfp-info button small">more info</button>'+
                      '</div>'+
                      
                    '</div>',
          verticalGap:68,        
      }
  });

  jQuery.extend(verge);
});


//parallax
  $(window).scroll(function() {
    if(Modernizr.touch)
      return;
    var scroll = $(window).scrollTop();
    var scroll1 = scroll + 5000;
    //console.log(scroll1);
    var visual = $('#home-visual__img');
    visual.css("transform","translateY(" +  (scroll/2.3)  + "px) scale(" +  scroll1/5000  + ")");
  });   
// open modal via reveal after click on .mfp-info
 $('body').on('click', '.mfp-info', function () {            
        $.magnificPopup.close();
        var titleContainer = $('#mfp-title');
        var title = $('.mfp-title').html();
        var modal = $('#contact-modal');
        //console.log(title);
        titleContainer.val(title); 
        setTimeout(function(){modal.foundation('reveal', 'open') },200);
    }); 

// init verge

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

