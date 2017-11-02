<?php
class About_Me extends WP_Widget {
    public function __construct() {
        $widget_optns = array(
            'description' => __('About Me Widget. It is useful for displaying a brief summary of you with your image and links to social media sites.', 'semanticwp')
        );
        parent::__construct('about-me', __('About Me', 'semanticwp'), $widget_optns);
    }

    public function widget($args, $instance) {
        
    }
} // class About_Me

class Special_Posts extends WP_Widget {
    public function __construct() {
        $widget_optns = array(
            'description' => __('It is useful for displaying Posts from a specific category or your recent posts.', 'semanticwp')
        );
        parent::__construct('special-posts', 'Special Posts', $widget_optns);
    }

    public function widget($args, $instance) {
        
    }
} // class Special_Posts