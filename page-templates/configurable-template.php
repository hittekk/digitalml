<?php
/* Template Name: Configurable Template
 *
 * @package digitalML
 */

get_header();
global $post;
?>

<?php if( get_field('banner') == 'image' ): ?>
<div class="page-banner release-banner" style="background: url(<?php the_field('banner_image'); ?>) no-repeat top center; background-size: cover">
	<div class="container release-banner-copy-height">
		<div class="row release-banner-copy-height">
			<div class="col-md-12 release-banner-copy-height">
				<div class="release-banner-copy-outer">
					<div class="release-banner-copy">
						<?php the_field('banner_copy'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--<div class="container release-img">
	<div class="row">
		<div class="col-md-12">
		<img src="<?php the_field('banner_image'); ?>" class="img-responsive">
		</div>
	</div>
</div>-->
<?php endif; ?>
<?php if( get_field('banner') == 'video' ): ?>
<div class="page-banner release-banner banner-video">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.youtube.com/embed/<?php the_field('banner_video'); ?>' frameborder='0' allowfullscreen></iframe></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>

<?php while ( have_posts() ) : the_post(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<h1 class="release-title"><?php the_title(); ?></h1>
		</div>
		<div class="col-md-8">
			<p class="release-intro"><?php the_content(); ?></p>
		</div>
	</div>
</div>
<?php endwhile; ?>

<?php
// check if the flexible content field has rows of data
if( have_rows('modules') ):

	 // loop through the rows of data
	while ( have_rows('modules') ) : the_row();

		if( get_row_layout() == 'copy' ): ?>
		<div class="release-module">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="module-copy"><?php the_sub_field('copy_text'); ?></div>
					</div>
				</div>
			</div>
		</div>
		
		<?php elseif( get_row_layout() == 'image_text' ): ?>
		<div class="release-module">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<!--<div class="module-img" style="background:url(<?php the_sub_field('image'); ?>) no-repeat center center"></div>-->
						<img src="<?php the_sub_field('image'); ?>" class="img-responsive">
					</div>
					<div class="col-md-4">
						<span class="module-title"><?php the_sub_field('title'); ?></span>
						<div class="module-copy"><?php the_sub_field('copy'); ?></div>
					</div>
				</div>
			</div>
		</div>
		
		<?php elseif( get_row_layout() == 'text_image' ): ?>
		<div class="release-module">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<span class="module-title"><?php the_sub_field('title'); ?></span>
						<div class="module-copy"><?php the_sub_field('copy'); ?></div>
					</div>
					<div class="col-md-8">
						<!--<div class="module-img" style="background:url(<?php the_sub_field('image'); ?>) no-repeat center center"></div>-->
						<img src="<?php the_sub_field('image'); ?>" class="img-responsive">
					</div>
				</div>
			</div>
		</div>
		
		<?php elseif( get_row_layout() == 'image' ): ?>
		<div class="release-module">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<img src="<?php the_sub_field('image'); ?>" class="img-responsive release-module-img">
					</div>
				</div>
			</div>
		</div>
		
		<?php elseif( get_row_layout() == 'quote' ): ?>
		<div class="quote release-module">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/images/quote-marks.png">
					</div>
					<div class="col-md-12 text-center">
						<?php the_sub_field('quote_text'); ?>
					</div>
				</div>
			</div>
		</div>
		

		<?php endif;

	endwhile;

else :

	// no layouts found

endif;

?>


<?php get_footer(); ?>

