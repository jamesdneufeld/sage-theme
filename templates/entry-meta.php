<time class="updated" datetime="<?= get_post_time('c', true); ?>">
    <?= get_the_date(); ?>
</time>
<p class="byline author vcard">
        <?php the_tags('', ', ', '<br />'); ?>
</p>

