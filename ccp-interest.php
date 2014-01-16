<section id="ccp-container" class="ccp-container small-12 columns">
    <div class="row">
        <?php while (have_posts()) : the_post(); ?>
            <article class="ccp-interest">
                <?php the_content(); ?>
            </article>
        <?php endwhile; // End the loop ?> 
        <?php get_template_part('ccp', 'desire'); ?>
    </div>
</section>