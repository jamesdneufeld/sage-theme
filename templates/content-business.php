<article <?php post_class(); ?>>
    <header>
        <div class="featured-image"><?php the_post_thumbnail('thumbnail', array('class' => 'img-responsive')); ?></div>
            <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </header>
    <div class="entry-summary">
<!--
        <time class="updated" datetime="<?= get_post_time('c', true); ?>">
    <?= get_the_date(); ?>
</time>

-->
        <h2 class="excerpt"><?php the_excerpt(); ?></h2>
    </div>
<!--    <?php get_template_part('templates/entry-meta'); ?>-->

    <p>This post/article is generated from templates/content-business.php</p>
</article>