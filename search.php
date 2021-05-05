<?php
/* Template Name: Blog Search Results
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

	<?php digitalml_get_template_part('partial-templates/category_nav.php', array()); ?>
	
	<div class="primary">

		 <h1 class="page-title" style="color: #666;"><?php printf( __( 'Search Results for: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
	
		 <?php while ( have_posts() ) : the_post(); ?>
	
	
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
				endwhile; 


		?>
	
	</div>
	
</div> <!-- container  -->




<div style="clear: both;"></div>



<?php get_footer('home-white'); ?>

