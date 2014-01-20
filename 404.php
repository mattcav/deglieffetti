<?php get_header(); ?>
  <?php get_template_part('component', 'header'); ?>
       
          <!-- article -->
            <article id="post-<?php the_ID(); ?>" <?php post_class('single-magazine'); ?>>
                <div class="row">
                  <div class="entry-content">
                     <h1 class="entry-content__title">
                        Not found
                     </h1>

                    <p>You're searching for something that is not here.</p>
                  </div>
                </div>
              </div> 
            </article>
        
        <?php get_template_part('component', 'footer'); ?>

    </div>
  </div>
</div>
<?php get_footer(); ?>