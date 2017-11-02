<?php get_header(); ?>
<div class="ui grid main container">
    <div class="<?php echo is_active_sidebar('blog') ? 'eleven ': 'sixteen '; ?>wide column">
        <?php 
            if (have_posts()):
                echo '<h1 class="ui teal dividing header main-title">' . __('Posts','semanticwp') . '</h1>';
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