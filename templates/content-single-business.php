<?php while (have_posts()) : the_post(); ?>


    <article <?php post_class(); ?>>


        <header>
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
             <h2><?php the_excerpt(); ?></h2>    
            <p>This is generated from templates/content-single-business.php</p>
        </header>

        <div>


            <p>
                <?php the_field('street-address'); ?>
                    <br>
                    <?php the_field('city'); ?>
                        <?php the_field('postal-code'); ?>
                            <br> Tel:
                            <?php the_field('phone-number'); ?>
                                <br> Website:
                                    <a href="<?php the_field('website'); ?>">
                                        <?php the_field('website'); ?>
                                    </a>
                                    <br> Email:
                                    <a href="mailto:<?php the_field('email-address'); ?>">
                                        <?php the_field('email-address'); ?>
                                    </a>
            </p>
            <p><?php the_field('business-description'); ?></p>
        </div>


        <div class="entry-content">
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