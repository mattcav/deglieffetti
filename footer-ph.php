    <script src="<?php echo get_template_directory_uri(); ?>/bower_components/jquery/jquery.js" ></script>
    <script src="<?php echo get_template_directory_uri(); ?>/bower_components/foundation/js/foundation.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/bower_components/foundation/js/foundation/foundation.interchange.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/bower_components/imagesloaded/imagesloaded.pkgd.min.js"></script>  
    <script src="<?php echo get_template_directory_uri(); ?>/bower_components/masonry/masonry.pkgd.min.js"></script>  
    <script src="<?php echo get_template_directory_uri(); ?>/bower_components/fittext/fittext.js"></script>  
    <script src="<?php echo get_template_directory_uri(); ?>/js/nat-form.js"></script>  

    <script>
    $(document).foundation();

        // masonry
        var container = document.querySelector('#ph-interest__inner');
        var msnry;
        imagesLoaded( container, function() {
          msnry = new Masonry( container, {
              columnWidth: '.ph-interest__img',
              itemSelector: '.ph-interest__img',
              gutter: 0
            });

          $('body').addClass('ready');
        });

        //fittext
        window.fitText( document.getElementById("ph-designer-title") );

        // nlform
        var nlform = new NLForm( document.getElementById( 'nl-form' ) );
        
    </script> 

  <?php wp_footer(); ?>
  </body>
</html>