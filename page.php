<?php get_header(); ?>
<div class="ui one column grid main container">
    <div class="row">
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>
                <div class="column">
                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="ui raised padded page segment">
                            <h2 class="page-title"><?php the_title(); ?></h2>
                            <div class="page-content"><?php the_content(); ?></div>
                        </div>
                        <?php if(comments_open() || get_comments_number()): ?>
                            <?php comments_template(); ?>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <?php get_template_part('template-parts/content', 'none'); ?>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>