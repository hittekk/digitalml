<?php
/**
 * The template part for displaying blog category nav
 *
 * @package digitalML
 */
?>

<div class="category_nav">
		<?php wp_list_categories( array(
			'title_li' => '',
			'orderby' => 'name',
			'show_count' => '0'
			
		) ); ?> 
		
		<?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
	</div>