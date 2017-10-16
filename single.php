<?php get_header(); ?>
<div class="ui grid container">
    <div class="row">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('template-parts/content', get_post_format());  ?>
        <?php endwhile; else : ?>
            <p><?php _e("Sorry! No posts to display.", "semanticwp"); ?></p>
    <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>