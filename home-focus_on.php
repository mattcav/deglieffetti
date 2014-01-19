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
                                        <?php the_post_thumbnail('focus-on__img'); ?>
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
