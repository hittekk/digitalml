<?php
/* Template Name: Releases
 *
 * @package digitalML
 */

get_header();
global $post;
?>


<div class="page-banner ignite-banner" style="background: url(<?php echo get_template_directory_uri(); ?>/images/releases-banner.jpg) no-repeat top center; background-size: cover">
	<div class="container">
			<div class="row">
			<div class="col-md-7">
				<table>
					<tr>
					  <td class="align-middle">
					<img src="http://www.digitalml.com/wp-content/uploads/2017/07/ignite-logo-white.png"</img>
					<h2><font color="white">Releases</font></h2>
					  </td>
					  
					</tr>
				</table>
			</div>
			<div class="col-md-5 hidden-xs">
				<table>
					<tr>
					  <td class="align-middle">
					  	<img src="<?php echo get_template_directory_uri(); ?>/images/careers-banner-img.png" class="img-responsive">
					  </td>
					</tr>
				</table>
			
			</div>
		</div>
	</div>
</div>


<div class="container">
	<div class="row">
		<div class="col-md-12">
			<section id="cd-timeline" class="cd-container">
			
				<?php 
				$args = array( 'post_type' => 'releases', 'posts_per_page' => -1 );
				$loop = new WP_Query( $args );
				 while ( $loop->have_posts() ) : $loop->the_post(); 
				?>

				<!-- start release -->
					
				<div class="cd-timeline-block">
					<div class="cd-timeline-img cd-icon">
						<?php if( has_term( 'product-release', 'releases-category' ) ) { ?>
						<img src="<?php echo get_template_directory_uri(); ?>/images/product-release-icon.png">
						<?php } else { ?>
						<img src="<?php echo get_template_directory_uri(); ?>/images/news-release-icon.png">
						<?php } ?>
					</div> <!-- cd-timeline-img -->

					<div class="cd-timeline-content">
						<h2><?php the_title(); ?></h2>
						<p><?php
						$content = get_the_content();
						echo force_balance_tags( html_entity_decode( wp_trim_words( htmlentities( $content ), 30 ) ) );
						?></p>
						<a href="<?php the_permalink() ?>" class="cd-read-more">Read more</a>
						<span class="cd-date"><?php echo get_the_date('m.d.Y'); ?></span>
					</div> <!-- cd-timeline-content -->
				</div> <!-- cd-timeline-block -->
				
				<!-- end release --> 




				<?php endwhile; ?>
			
				
			</section>
		</div>
	</div>
</div>

<?php get_footer(); ?>

