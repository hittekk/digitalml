<?php
/* Template Name: Blog by Category
 *
 * @package digitalML
 */


global $class;
$class = "blog category";

get_header('2021-gray');
?>

<div class="release_spacer"></div>

	<div class="container">
	
	<div class="secondary">
		<?php dynamic_sidebar( 'home_right_1' ); ?>
	</div>
	
	
	<?php
			
			$category = get_category( get_query_var( 'cat' ) );
			$catID = $category->cat_ID;
		
	?>
		
	<h1 style="color: #000;">Category: <?php single_cat_title(); ?></h1>
			

	
	<?php digitalml_get_template_part('partial-templates/category_nav.php', array()); ?>
	
	<div class="primary">
	

		<?php
		
			$args = array(
			  'category' => $catID,
			  'numberposts' => 9999
			);
			
			$latest_posts = get_posts( $args );
			if ( $latest_posts ) {
		?>
		
				
		<?php

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
	
	
	
	</div> 

</div>  <!-- container  -->


<div style="clear: both;"></div>



<?php get_footer('home-white'); ?>

