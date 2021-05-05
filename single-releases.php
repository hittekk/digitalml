<?php
/* 
 *
 * @package digitalML
 */

global $post, $page_url_home, $page_url_platform, $page_url_fasttrack, $page_url_resources, $page_url_aboutus;
get_header('home');
?>

<div style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/images/decor-bg-3.png); background-size: 100% auto; background-repeat: no-repeat; position: absolute; top: 100px; z-index: -1; height: 1000px; width:100%;"></div>
<div class="release_spacer single_release"></div>

<div id="white_page">


<?php while ( have_posts() ) : the_post(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1><?php the_title(); ?></h1>
		</div>
		<div class="col-md-12">
			<p><?php the_content(); ?></p>
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
		
	</div> <!-- white page -->

		

		<?php endif;

	endwhile;

else :

	// no layouts found

endif;



get_footer('home');


?>
	

