<section id="focus-section" class="focus-section section-padding">
    <h2 class="focus-section__title">focus on</h2>
                <?php       
                    $args = array(
                        'post_type' => 'designer',
                        'order' => 'DESC'
                        );

                    $focus_query = new WP_Query( $args );

                    if ( $focus_query->have_posts() ) {
                        while ( $focus_query->have_posts() ) {
                            $focus_query->the_post(); ?>

                        <article class="focus-on">
                                <a href="<?php the_permalink(); ?>">
                                    <figure class="focus-on__figure">
                                        <?php // the_post_thumbnail('focus-on__img'); ?>

                                        <img alt="<?php the_title(); ?>" class="focus-on__img" 
                                        data-interchange="[<?php bloginfo('template_directory'); ?>/images/<?php echo( basename(get_permalink()) ) ?>/home-cover-small.jpg, (default)], 
                                           [<?php bloginfo('template_directory'); ?>/images/<?php echo( basename(get_permalink()) ) ?>/home-cover-medium.jpg, (medium)]
                                           [<?php bloginfo('template_directory'); ?>/images/<?php echo( basename(get_permalink()) ) ?>/home-cover-medium.jpg, (large)]
                                           [<?php bloginfo('template_directory'); ?>/images/<?php echo( basename(get_permalink()) ) ?>/home-cover-medium.jpg, (xlarge)]
                                           "> 
                                        <noscript><img alt="welcome to degli effetti" src="<?php bloginfo('template_directory'); ?>/images/<?php echo( basename(get_permalink()) ) ?>/home-cover-medium.jpg"></noscript>

                                    </figure>
                                    <header class="focus-on__header">
                                        <h1 class="focus-on__title"><?php the_title(); ?></h1>
                                    </header>
                                </a>
                        </article>

                    <?php
                        }
                    } 
                    /* Restore original Post Data */
                    wp_reset_postdata(); 
                ?>
</section>
