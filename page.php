<?php
/**
 * TODO: Implement the archive template for displaying pages
 *
 * This is the template that displays all pages by default.
 *
 * @package digitalML
 */

get_header();
global $post;
?>

<div class="container">
	<div class="row">
<?php
	if (have_posts()) { the_post();
?>

        <h1><?php echo $post->post_title ?></h1>

        <?php the_content(); ?>i'm page content!
<?php } else { ?>
		<h1>Page Not Found</h1>
        <p>Sorry, but the page you were trying to view does not exist.</p>
<?php } ?>
    </div>
</div>


<?php get_footer(); ?>
