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

    //mailform ajax
    var button = $('#send');
    var response = $('#response');
    button.on('click', function(e){

      e.preventDefault(); 
      var valid = "";
      var isr = '&#201; is required';
      var name = $('#name').val();
      var email = $('#email').val();
      var item = $('#mfp-title').val();
      var message = $('#message').val();

      if (name.length<1) {
        valid += '<li> We need to know your name.</li>';
      }
      if (!email.match(/^([a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,4}$)/i)) {
        valid += '<li>We need to know your email.</li>';
      }
      if (message.length<1) {
        valid += '<li>Please, write us a message, not an empty mail.</li>';
      }
      if (valid!='') {
        response.addClass('error');
        response.fadeIn('slow');
        response.html('<ul class="lista">'+valid+'</ul>');
      } else {

      var dataString = 'name='+ name + '&email=' + email + '&message=' + message + '&item=' + item +'&action=form_submit';
      
      response.html('Sending …. ');
      response.fadeIn('slow');
      setTimeout ( function() { send(dataString); }, 2000);
        
        function send(dataString){
          $.ajax({
            type: "POST",
            url: "../wp-content/themes/DE/mail.php",
            data: dataString,
            success: function() {
              response.addClass('success');
              response.fadeIn('slow');
              response.html('Thanks for your message. <br>A personal shop assistant will contact you as soon as possible.');
              setTimeout(
                function(){
                  response.fadeOut('slow');
                }
                , 4000);
            }
          });
        };
         // return false;
        };
     }); // on click

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
    console.log(scroll1);
    var visual = $('#home-visual__img');
    visual.css("transform","translateY(" +  (scroll/2.3)  + "px) scale(" +  scroll1/5000  + ")");
  });   


  $('body').on('click', '.mfp-info', function () {            
        $.magnificPopup.close();
        title = $('.mfp-title').html();
        //console.log(title);
        $('#mfp-title').val(title); 
        setTimeout(
            function(){
                $('#contact-modal').foundation('reveal', 'open');
            }
            ,300);
    });

// end documentReady  
});


   


