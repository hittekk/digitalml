<?php
/**
 * The template part for displaying content
 *
 * @package digitalML
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php the_title(); ?>

    <?php the_content(); ?>
</article>