<?php
/* Template Name: Resources - Legacy
 *
 * @package digitalML
 */

get_header();
global $post;
?>

<?php
	if (have_posts()) { the_post();
?>
<div class="page-resources">
	<div class="container-fluid hero" id="section-1">
		<div class="row">
			<div class="module-wrap">
			  <div class="module image-module parallax">

				<div class="body-wrap">
				  <div class="body">
					<div class="text-wrap">
					  <div class="content"><?php the_content() ?></div>
					</div>

					<div class="icon-wrap">

					  <div class="card-module-wrap">
						<div class="shadow"></div>
						<div class="module image-module">
						  <span class="image-wrap" <?php /* [setimagebg] */ ?>>&nbsp; 
							<span id="platform-plan-overlay-wrap" class="overlay-wrap">&nbsp;<span id="platform-plan-overlay" class="overlay">&nbsp;</span></span>
						  </span>

						  <div class="body-wrap">
							<div class="header"><div class="icon"></div></div>
							<div class="body">
							  <span class="extra-small">digitalML</span>
								<span class="big-text">RESOURCES </br> 
								<h3>IGNITING DIGITAL MARKET LEADERSHIP</h3>

								</span>
								<p>Bringing business and IT practitioners together to learn, plan, and create API Products that transform large enterprises, allowing them to become digital, modernize IT systems, and grow.</p>
							</div>
						  </div>
						</div>
					  </div>

					</div>

				  </div><!-- end .body -->
				</div><!-- end .body-wrap -->
			  </div><!-- end module -->
			</div><!-- end module-wrap -->
		</div><!-- end row -->
	</div><!-- end container-fluid -->
</div>

<div class="container resource-filters">
	<div class="row">
		<div class="col-md-5ths">
			<button class="resource-icon" type="button" data-filter=".article"><img src="<?php echo get_template_directory_uri(); ?>/images/resource-articles.png"></button>
			<button class="resource-btn" type="button" data-filter=".article">Articles</button>
		</div>
		<div class="col-md-5ths">
			<button class="resource-icon" type="button" data-filter=".video"><img src="<?php echo get_template_directory_uri(); ?>/images/resource-videos.png"></button>
			<button class="resource-btn" type="button" data-filter=".video">Videos</button>
		</div>
		<div class="col-md-5ths">
			<button class="resource-icon" type="button" data-filter=".white-paper"><img src="<?php echo get_template_directory_uri(); ?>/images/resource-whitepapers.png"></button>
			<button class="resource-btn" type="button" data-filter=".white-paper">White Papers</button>
		</div>
		<div class="col-md-5ths">
			<button class="resource-icon" type="button" data-filter=".case-study"><img src="<?php echo get_template_directory_uri(); ?>/images/resource-casestudies.png"></button>
			<button class="resource-btn" type="button" data-filter=".case-study">Case Studies</button>
		</div>
		<div class="col-md-5ths">
			<button class="resource-icon" type="button" data-filter="all"><img src="<?php echo get_template_directory_uri(); ?>/images/resource-all.png"></button>
			<button class="resource-btn" type="button" data-filter="all">All</button>
		</div>
	</div>
</div>

<div class="container">
	<div class="row resource-items">
		<?php 
		$args = array( 'post_type' => 'resource-materials', 'posts_per_page' => -1 );
		$loop = new WP_Query( $args );
		 while ( $loop->have_posts() ) : $loop->the_post(); ?>
		 <?php

		$category = get_the_category();
		$firstCategory = $category[0]->cat_name;

		$taxonomy = array('resource-material-categories');
		$terms = get_the_terms( $post->ID, $taxonomy );						
		if ( $terms && ! is_wp_error( $terms ) ) : 

			$links = array();

			foreach ( $terms as $term ) {
				$links[] = $term->name;
			}

			$tax_links = join( " ", str_replace(' ', '-', $links));          
			$tax = strtolower($tax_links);
			$tax2 = strtolower($term->name);

		else :	
		$tax = '';					
		endif; ?>
		
		<div class="col-md-3 mix <?php echo $tax ?>">
			<div class="resource-outer">
				
				<?php if( get_field('link_type') == 'external_url' ) { ?>
				<a href="<?php the_field('external_url'); ?>">
				<?php } elseif( get_field('link_type') == 'pardot' ) {  ?>
				<a href="#myGatedContent" class="gated-content" data-toggle="modal" data-iframe-src="<?php the_field('pardot');?>">
				<?php } elseif( get_field('link_type') == 'video' ) {  ?>
				<a href="//www.youtube.com/watch?v=<?php the_field('youtube');?>" data-lity>
				<div id="inline" style="background:#fff" class="lity-hide"></div>
				<?php } ?>
				
				<?php $image = get_field( 'image' );
				echo wp_get_attachment_image($image, 'resource-thumb', false, array( 'class' => 'img-responsive' )); ?>
				
				<div class="resource-content">
					<div>
					<h3><?php the_title();?></h3>
					</div>
					<span><?php echo $term->name; ?></span>
				</div>
				</a>
			</div>
		</div>
		
		<?php endwhile; ?>
		
	</div>
</div>

		

<?php } else { ?>
		<div class="container">
			<div class="row">
				<h1>Page Not Found</h1>
		        <p>That's odd.</p>
			</div>
		</div>
<?php } ?>



<?php get_footer(); ?>

