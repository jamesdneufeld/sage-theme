<?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
        <header>
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <h2><?php the_field('wpcf-event-date'); ?></h2>
            <h3>Time: <?php the_field('wpcf-event-time'); ?></h3>
            <h3>Location: <?php the_field('wpcf-event-location'); ?></h3>
            <h2 class="excerpt"><?php the_field('wpcf-event-summary-teaser'); ?></h2>
            
            <p>This is generated from templates/content-single-event.php</p>
            </header>
        <div class="entry-content">
<!--            <span class="date"><?= get_the_date(); ?></span>-->
            <?php the_content(); ?>
            
        <p class="byline author vcard"><?php the_tags('', ', ', '<br />'); ?></p>
        </div>
        <footer>
            <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
        </footer>
        <?php comments_template('/templates/comments.php'); ?>
    </article>
    <?php endwhile; ?>