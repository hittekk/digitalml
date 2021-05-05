<?php
/* Template Name: Demo Video 2019
 *
 * @package digitalML
 */
global $post, $page_url_home, $page_url_platform, $page_url_fasttrack, $page_url_resources, $page_url_aboutus;
get_header('home');
?>
	
	<main class="main">
		<div class="release_spacer"></div>
	
		<div class="container">
		
		
			<?php
				if (have_posts()) { the_post();
			?>

					<h1><?php echo $post->post_title ?></h1>

					<?php the_content(); ?>
			<?php } else { ?>
					<h1>Page Not Found</h1>
					<p>Sorry, but the page you were trying to view does not exist.</p>
			<?php } ?>
			

		</div> <!--container -->	
		

	</main>


<?php
get_footer('home');