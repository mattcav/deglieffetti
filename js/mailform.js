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
        valid += '<li id="#form-error__name"> We need to know your name.</li>';
      }
      if (!email.match(/^([a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,4}$)/i)) {
        valid += '<li id="#form-error__email">We need to know your email.</li>';
      }
      if (message.length<1) {
        valid += '<li id="#form-error__message">Please, write us a message, not an empty mail.</li>';
      }
      if (valid!='') {
        response.addClass('error');
        response.fadeIn('slow');
        response.html('<ul id="form__errors" class="lista">'+valid+'</ul>');
      } else {

      var dataString = 'name='+ name + '&email=' + email + '&message=' + message + '&item=' + item +'&action=form_submit';
      
      response.html('Sending …. ');
      response.fadeIn('slow');
      setTimeout ( function() { send(dataString); }, 2000);
        
        function send(dataString){
          $.ajax({
            type: "POST",
            url: "../wp-content/themes/deglieffetti_v3/mail.php",
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