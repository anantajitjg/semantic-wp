<?php get_header(); ?>
<div class="ui one column grid container">
    <div class="row">
    <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
            <div class="column">
                <div class="ui raised padded page segment">
                    <h2 class="page-title"><?php the_title(); ?></h2>
                    <div class="page-content"><?php the_content(); ?></div>
                </div>
            </div>
        <?php endwhile; else: ?>
        <p><?php _e('Sorry! No page to display!', 'semanticwp'); ?></p>
    <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>