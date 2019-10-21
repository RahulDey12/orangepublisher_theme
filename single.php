<?php get_header(); ?>
<section class="single-blog-section">
    <div class="container">
        <div class="row single-blog-container">
            <div <?php post_class(array('col-12', 'col-md-9', 'single-blog-main')); ?> id="post-<?php the_ID(); ?>">
                <?php if(have_posts()): ?>
                    <?php get_template_part('template-parts/content', 'single') ?>
                <?php endif; ?>
            </div>
            <div class="col-12 col-md-3 single-blog-sidebar">
                <?php dynamic_sidebar( 'right-sidebar' ) ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
