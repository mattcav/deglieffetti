<?php get_header(); ?>

<!-- visual -->
<section class="top-container">
    <?php get_template_part('component', 'header'); ?>  
    <?php get_template_part('home', 'visual'); ?> 
</section>   

<main role="main" class="main">

    <?php get_template_part('home', 'boutique'); ?>

    <?php get_template_part('home', 'instagram'); ?>

    <?php get_template_part('home', 'magazine'); ?>

    <?php get_template_part('home', 'designers'); ?>

    <?php get_template_part('component', 'footer'); ?>      

</main>


<?php get_footer(); ?>