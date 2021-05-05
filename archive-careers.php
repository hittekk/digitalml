<?php
/* Template Name: Careers
 *
 * @package digitalML
 */
global $post, $page_url_home, $page_url_platform, $page_url_fasttrack, $page_url_resources, $page_url_aboutus;
get_header('home');
?>

	<main class="main">
	
		<div class="hero refresh about">
			<div class="container">
				<div class="static-content static-wider">
					<h1 class="refresh_hero_headline">Join our team</h1>
					<p><p>digitalML helps some of the world’s largest companies become digital. Working for digitalML means working at a young boutique tech company without the traditional pains of a startup – after 17 years, we’ve got our ducks in a row. You’ll get to meet some of the world’s smartest leaders across diverse industries, as you collaborate over our best-of-breed platform. But best of all, you’ll find we practice what we preach: agile, design-first, consistent, and world-class reliability.</p>
				</div>


			
			</div>
		</div>


<div class="container careers-page">
	<div class="row">
		<?php 
		$the_query = new WP_Query(array( 'post_type' => 'careers', 'posts_per_page' => -1 )); ?>

		<?php if( $the_query->have_posts() ): ?>
		<?php while( $the_query->have_posts() ) : $the_query->the_post();  ?>
			<div class="col-md-4 career-excerpt-outer">
				<div class="career-excerpt">
					<div class="career-excerpt-inner">
					<h3><?php the_title(); ?></h3>
					<?php
                    $content = get_the_content();
					echo force_balance_tags( html_entity_decode( wp_trim_words( htmlentities( $content ), 30 ) ) );
                    ?>
					</div>
					<a href="<?php the_permalink() ?>"><button>More about this position</button></a>
				</div>
				
				
			</div>
		<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>



<?php
get_footer('home');

