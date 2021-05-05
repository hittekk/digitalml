<?php
/* Template Name: Releases
 *
 * @package digitalML
 */

global $post, $page_url_home, $page_url_platform, $page_url_fasttrack, $page_url_resources, $page_url_aboutus;
get_header('home');
?>

<div style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/images/decor-bg-4.png); background-size: 100% auto; background-repeat: no-repeat; position: absolute; top: 100px; z-index: -1; height: 1000px; width:100%;"></div>
<div class="release_spacer"></div>

<div style="background-color: #f6f6f6; padding: 1em; border-radius: 5px; text-align: center; color: #040929; width: 925px; max-width: 90%; margin: 0 auto; transform: translateY(50px); font-size: 1.8em;letter-spacing: 0.2em;">RELEASES</div>

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

<?php get_footer('home'); ?>

