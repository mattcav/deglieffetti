<section id="magazine" class="magazine section-padding">
    <div class="row">
        <h2 class="magazine__title">magazine</h2>
        <?php       
            $args = array(
                'posts_per_page' => '2',
                'order' => 'DESC'
                );

            $mag_query = new WP_Query( $args );

            if ( $mag_query->have_posts() ) {
                while ( $mag_query->have_posts() ) {
                    $mag_query->the_post(); ?>

                <article class="home-mag">
                    <div class="home-mag__img">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('home-mag__thumb'); ?>
                        </a>
                    </div>

                    <div class="home-mag__desc">
                        <h2 class="home-mag__opening"><?php $category = get_the_category(); echo $category[0]->cat_name; ?> from degli effetti:</h2>
                        <h1 class="home-mag__title"><?php the_title(); ?></h1>

                        <p class="home-mag_text">
                            <?php the_excerpt_rss(); ?>
                        </p>

                        <a class="home-mag__more" href="<?php the_permalink(); ?>">read more...</a>

                    </div>
                </article>
                    
            <?php
                }
            } 
            /* Restore original Post Data */
            wp_reset_postdata(); 
        ?>
    </div>
</section>