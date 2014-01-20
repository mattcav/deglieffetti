<?php get_header(); ?>

<!-- visual -->
<section class="top-container">
    <?php get_template_part('component', 'header_home'); ?>  
    <?php get_template_part('home', 'visual'); ?> 
</section>   

<section role="main" class="main">

    <?php get_template_part('home', 'boutique'); ?>

    <?php get_template_part('home', 'instagram'); ?>

    <?php get_template_part('home', 'focus_on'); ?>

    <?php get_template_part('home', 'magazine'); ?>

    <?php get_template_part('home', 'designers'); ?>

</section>
    
    <?php get_template_part('component', 'footer'); ?>      


<?php get_template_part('footer', 'home'); ?>      
