<?php get_header(); ?>
<div class="ui one column grid container">
    <div class="row">
    <?php if (have_posts()) :
            while (have_posts()) : the_post();
                get_template_part('template-parts/content', 'none');
            endwhile; ?>
    <?php else: ?>
            <div class="column">
                <div class="ui raised segment">
                    <p><?php _e("Sorry! Nothing to display.", "semanticwp"); ?></p>
                </div>
            </div>
    <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>