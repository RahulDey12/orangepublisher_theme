<?php get_header(); ?>
<!-- The Top Section Of the page -->
<section class="blog-page-top-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-heading">
                    <?php if ( is_home() && ! is_front_page() ) : ?>
                        <h1 class="main-heading"><?php single_post_title(); ?></h1>
                    <?php endif; ?>
                </div>
                <div class="text">
                    <p>The most prestigious self book publishing companies in Kolkata – <span class="highlight">Orange Publishers.</span></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section of the Page -->
<section class="blog-page-blogs-section">
    <div class="container">
        <?php if(have_posts()): ?>
            <div class="row main-blogs">
                <?php while (have_posts()): the_post(); ?>
                    <div class="col-4 blog">
                        <div class="img-container">
                            <?php if(has_post_thumbnail()): ?>
                                <img src="<?php echo get_the_post_thumbnail_url(null, 'orange-blog') ?>" alt="<?php the_title() ?>">
                            <?php endif; ?>
                            <a href="<?php the_permalink(); ?>" class="overlay"></a>
                        </div>
                        <h4 class="orange-blog-title">
                            <a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), 5, '...' ); ?></a>
                        </h4>
                        <div class="icon">
                            <div class="outer"></div>
                            <a href="<?php the_permalink(); ?>"><i class="fas fa-angle-right fa-2x"></i></a>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>
