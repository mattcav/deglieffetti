<?php get_header(); ?>
  <?php get_template_part('component', 'header'); ?>
       
        <?php while (have_posts()) : the_post(); ?>
          <!-- article -->
            <article id="post-<?php the_ID(); ?>" <?php post_class('single-magazine'); ?>>
                  <?php 
                   if ( has_post_thumbnail() ) {
                     echo '<figure class="single-magazine__figure">';
                     the_post_thumbnail('full', array('class' => 'single-magazine__img'));
                     echo '</figure>';
                   }  
                  ?>
            
                <div class="row">
                  <div class="entry-content">
                     <h1 class="entry-content__title">
                        <?php the_title(); ?>
                     </h1>

                    <?php the_content(); ?>
                  </div>
                </div>
              </div> 
            </article>
          <?php endwhile;
            // Reset Query
            wp_reset_query();
          ?> 
        
        <?php get_template_part('component', 'footer'); ?>

    </div>
  </div>
</div>
<?php get_footer(); ?>