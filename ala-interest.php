<section id="ala-interest" class="ala-interest">
   <div class="ala-interest__container">
    <figure class="ala-interest__figure">
        <img class="ala-interest__img" src="<?php bloginfo('template_directory'); ?>/images/alaia/ala-large.jpg" alt="Azzedine Alaia at work">
    </figure> 
    
    <div class="ala-interest__inner">
    <?php while (have_posts()) : the_post(); ?>
        <h2 class="ala-interest__title">
            <!-- <img src="<?php bloginfo('template_directory'); ?>/images/alaia/logo-ala.svg" alt="Alaia Logo"> -->
            Azzedine Alaïa
        </h2>
        <?php the_content(); ?>
     <?php endwhile; ?>
    </div>
   </div>
</section>