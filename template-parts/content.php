<div class="column">
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="ui padded blog clearing segment">
            <?php semanticwp_featured_image(); ?>
            <?php if(is_sticky() && is_home() && (!is_paged())): ?>
                <div class="ui left corner large label">
                    <i class="pin icon"></i>
                </div>
            <?php endif; ?>
            <?php 
                if(is_single()): 
                    semanticwp_category();
                endif;
            ?>
            <h2 class="ui dividing header blog-title">
                <?php if (is_single()): ?>
                    <?php the_title(); ?>
                <?php else: ?>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <?php endif; ?>
            </h2>
            <?php if(get_post_type() === 'post'): ?>
                <div class="blog-meta-secondary">
                    <a class="ui label" href="<?php the_permalink(); ?>" title="<?php the_time('g:i A'); ?>"><i class="calendar icon"></i> <?php the_time('jS F Y'); ?></a>
                    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" title="<?php the_author(); ?>" class="ui label"><i class="user icon"></i> <?php the_author(); ?></a>
                    <?php semanticwp_comments_label(); ?>
                </div>
            <?php endif; ?>
            <div class="blog-content">
                <?php if (is_single()):
                        the_content();
                        semanticwp_tags(); ?>
                <?php else: ?>
                    <?php the_excerpt(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
