<div class="column">
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="ui blog clearing segment">
            <div class="ui teal right corner label">
                <i class="image icon"></i>
            </div>
            <div class="ui dividing header gallery-title"><?php the_title(); ?> <span class="ui label"><i class="calendar icon"></i> <?php the_time('jS F Y'); ?></span></div>
            <div class="gallery-content">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>