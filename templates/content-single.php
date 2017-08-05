<?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
        <header>
            <h1 class="entry-title"><?php the_title(); ?></h1>
        </header>
        <div class="entry-content">
            <!--<span class="date"><?= get_the_date(); ?></span>-->
            <!--Hide the real date on the post-->
            <?php the_content(); ?>
        </div>
        <footer>
            <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
        </footer>
            <p class="info">Related</p>
            <p class="byline author vcard"><strong><?php the_category(', ') ?></strong> |
                <?php the_tags('', ', ', ''); ?>
            </p>
        <?php comments_template('/templates/comments.php'); ?>


    </article>
    <?php endwhile; ?>