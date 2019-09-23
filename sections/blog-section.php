<?php
$args = array(
    'post_type'         =>  'post',
    'post_status'       =>  'publish',
    'posts_per_page'    =>  3
);

$the_query = new WP_Query($args);
?>
<section class="orange-blog-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="section-heading">
                <h2 class="main-heading">our <span>Blogs</span></h2>
                <p class="sub-heading">Here are many variations of passages</p>
            </div>

            <div class="blogs col-12">
                <?php if($the_query->have_posts()):
                        while ($the_query->have_posts()): $the_query->the_post(); ?>
                    <div class="blog">
                        <a href="<?php the_permalink(); ?>">
                            <?php if(has_post_thumbnail()): ?>
                                <img src="<?php echo get_the_post_thumbnail_url(null, 'orange-blog') ?>" alt="<?php the_title() ?>">
                            <?php endif; ?>
                        </a>
                        <p class="date"><?php the_time('d-m-Y'); ?></p>
                        <a href="<?php the_permalink(); ?>">
                            <p class="title"><?php the_title() ?></p>
                        </a>
                    </div>
                            <?php wp_reset_postdata(); ?>
                <?php
                        endwhile;
                endif;
                ?>
            </div>
            <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="blog-button">Read All</a>
        </div>
    </div>
</section>
