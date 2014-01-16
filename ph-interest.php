<section id="ph-interest" class="ph-interest">
  
  <div class="ph-interest__container">
    <div id="ph-interest__inner">
      <img src="<?php bloginfo('template_directory'); ?>/images/paul-harnden/ph-1.jpg" alt="Paul Harnden Shoemakers" class="ph-interest__img">
      <img src="<?php bloginfo('template_directory'); ?>/images/paul-harnden/ph-2.jpg" alt="Paul Harnden Shoemakers" class="ph-interest__img">
      <img src="<?php bloginfo('template_directory'); ?>/images/paul-harnden/ph-3.jpg" alt="Paul Harnden Shoemakers" class="ph-interest__img">
      <img src="<?php bloginfo('template_directory'); ?>/images/paul-harnden/ph-4.jpg" alt="Paul Harnden Shoemakers" class="ph-interest__img">
      <img src="<?php bloginfo('template_directory'); ?>/images/paul-harnden/ph-5.jpg" alt="Paul Harnden Shoemakers" class="ph-interest__img">
      <img src="<?php bloginfo('template_directory'); ?>/images/paul-harnden/ph-6.jpg" alt="Paul Harnden Shoemakers" class="ph-interest__img">
      <img src="<?php bloginfo('template_directory'); ?>/images/paul-harnden/ph-7.jpg" alt="Paul Harnden Shoemakers" class="ph-interest__img">
      <img src="<?php bloginfo('template_directory'); ?>/images/paul-harnden/ph-8.jpg" alt="Paul Harnden Shoemakers" class="ph-interest__img">
      <img src="<?php bloginfo('template_directory'); ?>/images/paul-harnden/ph-9.jpg" alt="Paul Harnden Shoemakers" class="ph-interest__img">
      <img src="<?php bloginfo('template_directory'); ?>/images/paul-harnden/ph-10.jpg" alt="Paul Harnden Shoemakers" class="ph-interest__img">
      <img src="<?php bloginfo('template_directory'); ?>/images/paul-harnden/ph-11.jpg" alt="Paul Harnden Shoemakers" class="ph-interest__img">
      <img src="<?php bloginfo('template_directory'); ?>/images/paul-harnden/ph-12.jpg" alt="Paul Harnden Shoemakers" class="ph-interest__img">
      <img src="<?php bloginfo('template_directory'); ?>/images/paul-harnden/ph-13.jpg" alt="Paul Harnden Shoemakers" class="ph-interest__img">
      <img src="<?php bloginfo('template_directory'); ?>/images/paul-harnden/ph-14.jpg" alt="Paul Harnden Shoemakers" class="ph-interest__img">
      <img src="<?php bloginfo('template_directory'); ?>/images/paul-harnden/ph-15.jpg" alt="Paul Harnden Shoemakers" class="ph-interest__img"> 
    </div>
  </div>
  
  <div class="row">
    <article class="ph-interest__text">
    <?php while (have_posts()) : the_post(); ?>
        <h1 class="ph-interest__title"><?php the_title(); ?></h1>
        <?php the_content(); ?>
      </article>
    <?php endwhile; // End the loop ?> 
  </div>

</section>