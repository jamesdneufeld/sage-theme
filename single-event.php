<?php
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
the_post_thumbnail( 'full' );
}
?>
<?php get_template_part('templates/content-single-event', get_post_type()); ?>
