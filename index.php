<?php get_header(); ?>
<div class="ui one column grid container">
    <div class="row">
<?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('template-parts/content', 'none');  ?>
        <?php endwhile; else : ?>
        <p><?php _e("Sorry! Nothing to display.", "semanticwp"); ?></p>
<?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>