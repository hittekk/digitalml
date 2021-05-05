<?php
/* Template Name: Event page Template
 *
 * @package digitalML
 */

get_header();
global $post, $page_url_home, $page_url_platform, $page_url_fasttrack, $page_url_resources, $page_url_aboutus;
?>

<div id="content">

<?php if (have_posts()): ?>
<?php while (have_posts()) : the_post(); ?>

	<?php the_content(''); ?>

<?php endwhile; ?>
<?php endif; ?> 

</div>


<?php get_footer(); ?>