<?php
/* 
 *
 * @package digitalML
 */


global $post, $page_url_home, $page_url_platform, $page_url_fasttrack, $page_url_resources, $page_url_aboutus;
get_header('2020-white');
?>

<div class="release_spacer single_release"></div>

<div id="white_page">


<?php while ( have_posts() ) : the_post(); ?>
<div class="container career-page ">
	<div class="row">
		<div class="col-md-9">
			<h1><?php the_title(); ?></h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			
			<div class="career-content">
				<?php the_content(); ?>
			</div>
			
			<div id="stickysidebar">
				<div class="apply-box">
					<h2>Apply for this position</h2>
					<?php echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
				</div>
			</div>
			
		</div>
	</div>
</div>
<?php
endwhile; //resetting the page loop
wp_reset_query(); //resetting the page query
?>
			
<div class="about-digitalml foot">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<h2>About digitalml</h2>

digitalml offers great compensation (base salary, bonuses), work-life balance, health insurance coverage, share options and 401k. 
<br><br>
We are privately held with a structure that gives full control to the management team all of who share a long-term view to do the right thing. Our customer base represents some of the largest organizations in the world and we are adamant in our belief in NO SHELFWARE which means we are committed to long term partnerships with our customers. The company has coverage in the North American and EMEA markets with locations in New York and London.  www.digitalml.com
			</div>
			<div class="col-md-5 text-center">
				<img src="<?php echo get_template_directory_uri(); ?>/images/careers-about.png">
			</div>
		</div>
	</div>
</div>

<?php

get_footer('home-white');


?>
	