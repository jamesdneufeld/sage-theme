<article <?php post_class(); ?>>
    <header>
        <div class="featured-image"><?php the_post_thumbnail('thumbnail', array('class' => 'img-responsive')); ?></div>
            <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </header>
    <div class="entry-summary">
<!--
        <time class="updated" datetime="<?= get_post_time('c', true); ?>">
    <?= get_the_date(); ?>
</time> &mdash; 
-->
        <?php the_excerpt(); ?>
    </div>
<!--    <?php get_template_part('templates/entry-meta'); ?>-->
<p class="info">Topics</p>
    <p class="byline author vcard"><strong><?php the_category(', ') ?></strong> |
                <?php the_tags('', ', ', ''); ?>
            </p>
    
</article>