<?php get_header(); ?>
<div class="ui grid main container">
    <div class="<?php echo is_active_sidebar('blog')? 'eleven ': 'sixteen '; ?>wide column">
        <?php 
            if (have_posts()):
                while (have_posts()): the_post();
                    get_template_part('template-parts/content', get_post_format());
                    if(comments_open() || get_comments_number()):
                        comments_template();
                    endif;
                    the_post_navigation(array(
                        'prev_text' => '<div class="ui animated button" tabindex="0"><div class="visible content">'.__('Previous', 'semanticwp').'</div><div class="hidden content"><i class="left arrow icon"></i></div></div><span class="screen-reader-text">'.__('Previous Post', 'semanticwp').'</span><span class="nav-post-title">%title</span>',
                        'next_text' => '<span class="screen-reader-text">'.__('Next Post', 'semanticwp').'</span><span class="nav-post-title">%title</span><div class="ui animated button" tabindex="0"><div class="visible content">'.__('Next', 'semanticwp').'</div><div class="hidden content"><i class="right arrow icon"></i></div></div>'
                    ));
                endwhile;
            else:
                get_template_part('template-parts/content', 'none');
            endif;
        ?>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>