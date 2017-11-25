<?php

/**
 * is front page without paged result
 * @return boolean true if there is no paged result
 */
function is_not_paged_front_page () {
    return is_front_page() && (!is_paged());
}

/**
 * get the url for homepage featured image
 * @return string image url
 */
function get_featured_homepage_image_url() {
    $url = get_template_directory_uri() . '/img/featured_image.png';
    if(strlen(get_theme_mod('featured_homepage_image')) > 0) {
        $img_src_arr = wp_get_attachment_image_src(get_theme_mod('featured_homepage_image'), 'full');
        if($img_src_arr) {
            $url = $img_src_arr[0];
        }
    }
    return $url;
}

/**
 * Navigation Menu
 * @param string $theme_location Menu location identifier (primary/footer)
 * @param string $type optional Menu Type for Primary Menu (default/sidebar)
 */
if(!function_exists('semanticwp_menu')) {
    function semanticwp_menu($theme_location, $type = 'default') {
        if (has_nav_menu($theme_location)) {
            $container = '';
            $menu_id = $type === 'default' ? "semanticwp-{$theme_location}-menu" : "semanticwp-{$type}-menu";
            $menu_class = ($theme_location === 'primary' && $type === 'sidebar') ? 'ui vertical inverted primary sidebar menu' : 'ui secondary inverted pointing menu';
            $items_wrap = ($theme_location === 'primary' && $type === 'default') ? '<div id="%1$s" class="%2$s"><a class="menubtn right item"><i class="sidebar icon"></i>'.__('Menu', 'semanticwp').'</a><div class="right menu">%3$s</div></div>' : '<div id="%1$s" class="%2$s">%3$s</div>';
            $link_before = $type === 'default' ? '<span class="text">' : '';
            $link_after = $type === 'default' ? '</span>': '';
            $walker = new Semantic_Walker_Nav_Menu();
            $args = compact('theme_location', 'container', 'menu_id', 'menu_class', 'items_wrap', 'link_before', 'link_after', 'walker');
            wp_nav_menu($args);
        }
    }
}

/**
 * Featured Image
 */
if(!function_exists('semanticwp_featured_image')):
    function semanticwp_featured_image() {
        if(has_post_thumbnail()): ?>
            <div class="featured-image">
                <?php 
                if(!is_single()): ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="ui image">
                        <?php the_post_thumbnail(); ?>
                    </a>
                <?php else:
                    the_post_thumbnail('post-thumbnail', array('class' => 'ui image'));
                endif; // check: !is_single()
                ?>
            </div>
        <?php endif;
    }
endif;

/**
 * Posts Pagination
 */
if(!function_exists('semanticwp_posts_pagination')):
    function semanticwp_posts_pagination() {
        the_posts_pagination(array(
            'prev_text' => '<span class="ui animated button" tabindex="0"><span class="visible content">'.__('Previous', 'semanticwp').'</span><span class="hidden content"><i class="left arrow icon"></i></span></span><span class="screen-reader-text">'.__('Previous page: ', 'semanticwp').'</span>',
            'before_page_number' => '<span class="ui button"><span class="screen-reader-text">'.__('Page: ', 'semanticwp').'</span>',
            'after_page_number' => '</span>',
            'next_text' => '<span class="screen-reader-text">'.__('Next page: ', 'semanticwp').'</span><span class="ui animated button" tabindex="0"><span class="visible content">'.__('Next', 'semanticwp').'</span><span class="hidden content"><i class="right arrow icon"></i></span></span>'
        ));
    }
endif;

/**
 * Custom Category list for Posts
 */
if(!function_exists('semanticwp_category')):
    function semanticwp_category() {
        $categories = get_the_category();
        if(!empty($categories)) {
            $list = '<div class="ui small teal labels blog-meta-primary">';
            foreach($categories as $category) {
                $list.= '<a href="'.esc_url(get_category_link($category->term_id)).'" class="ui label" rel="category tag">'.esc_html($category->name).'</a>';
            }
            $list.='</div>';
            echo $list;
        }
    }
endif;

/**
 * Custom Tag list for Posts
 */
if(!function_exists('semanticwp_tags')):
    function semanticwp_tags() {
        global $post;
        $tags = get_the_tags($post->ID);
        if(!empty($tags)) {
            $list = '<div class="ui clearing hidden divider"></div><div class="ui tag small labels blog-meta-tertiary"><span class="screen-reader-text">'.__( 'Tags: ', 'semanticwp' ).'</span>';
            foreach($tags as $tag) {
                $list.= '<a href="'.esc_url(get_tag_link($tag->term_id)).'" class="ui label" rel="tag">'.esc_html($tag->name).'</a>';
            }
            $list.='</div>';
            echo $list;
        }
    }
endif;

/**
 * Comment(s) Label for Posts
 */
if(!function_exists('semanticwp_comments_label')) {
    function semanticwp_comments_label() {
        if(get_comments_number()): ?>
            <span class="ui label"><i class="<?php echo (get_comments_number() > 1)?'comments':'comment'; ?> icon"></i><?php echo get_comments_number(); ?><span class="detail"><?php echo (get_comments_number() > 1)?'Comments':'Comment'; ?></span></span>
        <?php
        endif;
    }
}