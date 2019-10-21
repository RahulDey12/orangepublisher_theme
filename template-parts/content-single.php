<?php while (have_posts()): the_post(); ?>
    <h1 class="page-title"><?php the_title() ?></h1>
    <div class="post-meta">
        <p><i class="fas fa-calendar-alt"></i> <?php the_date('F d, Y') ?></p>
        <p><i class="fas fa-user"></i> <?php the_author() ?></p>
    </div>
    <?php if (has_post_thumbnail()): ?>
        <div class="post-thumbnail">
            <img src="<?php the_post_thumbnail_url('full') ?>" alt="<?php the_title() ?>">
        </div>
    <?php endif; ?>
    <div class="post-content">
        <?php the_content(); ?>
    </div>
<?php endwhile; ?>
