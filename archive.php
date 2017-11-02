<?php get_header(); ?>
<div class="ui grid main container">
    <div class="<?php echo is_active_sidebar('blog')? 'eleven ': 'sixteen '; ?>wide column">
        <?php if(is_category()): ?>
            <h2 class="ui dividing header category-title"><?php single_cat_title(); ?></h2>
        <?php else: ?>
            <?php the_archive_title('<h2 class="ui dividing header archive-title">', '</h2>'); ?>
        <?php endif; ?>
        <?php 
            if (have_posts()):
                while (have_posts()): the_post();
                    get_template_part('template-parts/content', get_post_format());
                endwhile;
                semanticwp_posts_pagination();
            else:
                get_template_part('template-parts/content', 'none');
            endif;
        ?>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>