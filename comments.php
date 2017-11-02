<?php

if(post_password_required())
    return;

?>
<div class="blog-comments">
    <h3 class="ui dividing header"><?php _e('Comments', 'semanticwp'); ?></h3>
    <?php if(have_comments()): ?>
        <ul>
            <?php 
            wp_list_comments(array(
                'short_ping' => true
            ));
            ?>
        </ul>
        <?php
            the_comments_pagination(array(
                'prev_text' => '<span><i class="arrow left icon"></i> '.__('Previous', 'semanticwp').'</span>',
                'next_text' => '<span><i class="arrow right icon"></i> '.__('Next', 'semanticwp').'</span>'
            ));
        ?>
        <?php if(!comments_open() && get_comments_number()): ?>
            <p><?php _e('Comments are closed', 'semanticwp'); ?></p>
        <?php endif; ?>
    <?php endif; // check: have_comments() ?>
    <?php comment_form(); ?>
</div>