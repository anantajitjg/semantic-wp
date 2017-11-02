<div class="column">
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="ui blog clearing segment">
            <div class="aside-meta">
                <div class="ui teal ribbon label">
                    <?php
                        the_author();
                        _e(' on ', 'semanticwp');
                        the_time('jS F Y g:i A');
                    ?>
                </div>
            </div>
            <div class="aside-content">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>