<?php
/**
 *
 * This is the template that displays the homepage modules.
 *
 * @package digitalML
 */
?>

<?php get_header(); ?>

<?php
if (is_front_page()) :
	// NOTE: with Post Types Order plugin active, order is ignored and uses admin sort
	/*
	$homepage_module_query_args = array(
	    'post_type' => array('homepage_module'),
	    'post_status' => array('publish'),
	    'posts_per_page' => -1,
	    'order' => 'ASC',
	    'orderby' => 'date'
	);

	// display markup for integrated query results
	digitalml_get_template_part('partial-templates/_homepage-modules-list.php', array(
		'query_args' => $homepage_module_query_args
	));
	*/
?>

<?php
else :
	while (have_posts()) : the_post();
        get_template_part('partial-templates/content', get_post_format());
	endwhile;
endif;
?>

<?php get_footer(); ?>
