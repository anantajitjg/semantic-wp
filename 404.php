<?php get_header(); ?>
<div class="ui one column grid container">
    <div class="row">
        <div class="column">
            <div class="ui raised segment">
                <h2 class="ui dividing header"><?php _e('Sorry! Page not found!', 'semanticwp'); ?></h2>
                <div><?php _e('It looks like nothing was found at this location. Please try search!', 'semanticwp'); ?></div>
                <?php get_search_form(); ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>