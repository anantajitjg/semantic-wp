<div class="column">
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="ui blog clearing segment">
            <div class="ui left corner label">
                <i class="linkify icon"></i>
            </div>
            <div class="link-content">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>