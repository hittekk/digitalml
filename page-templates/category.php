<?php
/* Template Name: Blog by Category
 *
 * @package digitalML
 */

global $post, $page_url_home, $page_url_platform, $page_url_fasttrack, $page_url_resources, $page_url_aboutus;

global $class;
$class = "blog category";

get_header('2020-white');
?>

<div class="release_spacer"></div>


<div class="primary">
	
	<div class="container">
	
		<?php
			$args = array(
			  'numberposts' => 9999
			);
 
			$latest_posts = get_posts( $args );
			if ( $latest_posts ) {

			  foreach ( $latest_posts as $post ) :
				 setup_postdata( $post );
			 
			 
		?>
	
	
				<div class="blog_teaser">
			
			
					<div class="blog_thumbnail" style="background-image: url('<?php echo the_post_thumbnail_url() ?>');">
						<a tabindex="-1" href="<?php the_permalink(); ?>" target="_self" style="width: 100%; height: 100%; display: block;"></a>
					</div>
			
					<div class="blog_intro">
	
						<p class="blog_date"><?php the_date()  ?></p>
					
						<h3 class="blog_title_link"><a href="<?php the_permalink(); ?>" target="_self"><?php the_title(); ?></a></h3>
						<div class="blog_excerpt"><?php the_excerpt(); ?></p></div>
						<div class="blog_categories"><?php the_category(); ?></div>
						<div class="blog_tags"><?php the_tags(); ?></div>
						<hr class="blog_hr">
						<div class="blog_readMore"><a href="<?php the_permalink(); ?>" target="_self">Read More</a></div>
					</div>
		
					<div style="clear: both; height: 50px;"></div>
				
				</div> <!-- blog_teaser  -->
		
	
		<?php
				endforeach; 
				wp_reset_postdata();
			}
		?>
	
	
	
	</div> <!-- container  -->

</div>

<div class="secondary">
	<?php get_sidebar(); ?>
</div>

<div style="clear: both;"></div>



<?php get_footer('home-white'); ?>

