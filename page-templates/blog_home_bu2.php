<?php
/* Template Name: Blog Home Page
 *
 * @package digitalML
 */

global $post, $page_url_home, $page_url_platform, $page_url_fasttrack, $page_url_resources, $page_url_aboutus;

global $class;
$class = "blog";

get_header('home-white');
?>

<div class="release_spacer"></div>

<div class="container">
	<div class="secondary">
		<?php dynamic_sidebar( 'home_right_1' ); ?>
	</div>


	<h3 style="color: #040929;">digitalML Blog: The Key to the Intelligent Enterprise</h3>
	
	
	<?php digitalml_get_template_part('partial-templates/category_nav.php', array()); ?>

	
	<div class="primary">


	
		<?php
			$postOffset = ($_GET['o']) ? ($_GET['o']-1) : "0";
			$numberOfPosts = ($_GET['o']) ? 999 : 5;
		
			$args = array(
				'numberposts' => $numberOfPosts,
				'offset' => $postOffset,
				'category__not_in' => 22
			);
 
 			echo $postOffset;
 			
 			
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
	
						<p class="blog_date"><?php echo get_the_date()  ?></p>
					
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
			
			
			if (empty($_GET['o'])) {	
		?>
		
			<div style="text-align: center; text-transform: uppercase;"><a class="button" href="/blog/?o=6">see more posts</a></div>
			
		<?php } ?>
		
		
	</div>
	
</div> <!-- container  -->




<div style="clear: both;"></div>



<?php get_footer('home-white'); ?>

