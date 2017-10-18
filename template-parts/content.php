<div class="column">
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="ui raised padded blog segment">
            <h2 class="blog-title">
                <?php if (is_single()) : ?>
                    <?php the_title(); ?>
                <?php else: ?>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <?php endif; ?>
            </h2>
            <div class="blog-meta">
                <a class="ui label" href="<?php the_permalink(); ?>" title="<?php the_time('g:i A'); ?>"><i class="calendar icon"></i> <?php the_time('jS F Y'); ?></a>
                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" title="<?php the_author(); ?>" class="ui label"><i class="user icon"></i> <?php the_author(); ?></a>
            </div>
            <div class="blog-content">
                <?php if (is_single()) : ?>
                    <?php the_content(); ?>
                <?php else: ?>
                    <?php the_excerpt(); ?>
                <?php endif; ?>
            </div>
            <?php if(is_single() && (comments_open() || get_comments_number())) : ?>
                <?php comments_template(); ?>
            <?php endif; ?>
        </div>
    </div>
</div>
