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

// draw svg

var current_frame, total_frames, path, length, handle, myobj;
myobj = document.getElementById('ala-dress__container').cloneNode(true);

var current_frame = 0;
var total_frames = 200;
var path = new Array();
var length = new Array();

for(var i=0; i<7;i++){
  path[i] = document.getElementById('i'+i);
  l = path[i].getTotalLength();
  length[i] = l;
  path[i].style.strokeDasharray = l + ' ' + l; 
  path[i].style.strokeDashoffset = l;
}
var handle = 0;

var draw = function() {
   var progress = current_frame/total_frames;
   //var dress = $('#ala-dress');
   if (progress > 1) {
     window.cancelAnimationFrame(handle);
     $('#ala-dress__container').addClass('dress-ready');
   } else {
     current_frame++;
     for(var j=0; j<path.length;j++){
       path[j].style.strokeDashoffset = Math.floor(length[j] * (1 - progress));
     }
     handle = window.requestAnimationFrame(draw);
   }
};
draw();