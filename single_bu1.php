<?php
/* Template Name: Blog
 *
 * @package digitalML
 */

global $post, $page_url_home, $page_url_platform, $page_url_fasttrack, $page_url_resources, $page_url_aboutus;

global $class;
$class = "blog-single";

get_header('home-white');
?>

<div class="release_spacer"></div>

<div class="container">
	


	<div class="secondary">
		<?php dynamic_sidebar( 'home_right_1' ); ?>
	</div>
	
	<h4 style="color: #040929;">digitalML Blog: The Key to the Intelligent Enterprise</h4>

	<?php digitalml_get_template_part('partial-templates/category_nav.php', array()); ?>

	<div class="primary">
	
	
		<?php while ( have_posts() ) : the_post(); ?>

		 <article class="blog">
			<h1><?php the_title(); ?></h1>
			<p class="blog_date" style="display: inline; color: #000; text-transform: uppercase; font-weight: bold; font-size: 0.9em;"><?php the_date()  ?></p> &nbsp; | &nbsp;
			
			<?php the_content(); ?>
		
			<div style="clear: both;"></div>
			
			<div class="author_container">	
				<h5>About the Author</h5>		
				<?php 
					echo get_avatar(get_the_author_meta('ID'));
					echo "<b>".(get_the_author_meta('first_name')) ." ". (get_the_author_meta('last_name')) ."</b><br>";
					echo nl2br(get_the_author_meta('description'));
				?>
			</div>
			
			
		</article>

	
	
		<?php endwhile; ?>
	
	
		</div>


	
	</div> <!-- container -->
	
	


<div style="clear: both;"></div>




<?php get_footer('home-white'); ?>

