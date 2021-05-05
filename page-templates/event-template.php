<?php
/* Template Name: Event Template
 *
 * @package digitalML
 */

get_header();
global $post;
?>

<div class="event-banner" style="background: url(<?php the_field('banner_image'); ?>) no-repeat top center; background-size: cover">
	<div>
		<h1><?php the_title();?></h1>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
			<h2><span class="event-date"><?php the_field('date');?></span></h2>
			<span class="event-location"><?php the_field('location_address');?></span>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2 text-center event-description">
		<?php the_field('description');?>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
		</div>
	</div>
</div>

<HR>

<div class="container">
<div class="row">
</div>
</div>

<div class="container-fluid event-speakers">
	<div class="row">
		
		<?php
		if( have_rows('speakers') ):
		while ( have_rows('speakers') ) : the_row(); ?>

			<div class="col-md-3 speaker">
				<img src="<?php the_sub_field('logo');?>" class="img-responsive">
				<div class="speaker-content">
					<span class="speaker-name"><?php the_sub_field('name');?></span>
					<span class="speaker-position"><?php the_sub_field('position');?></span>
					<span class="speaker-description"><?php the_sub_field('description');?></span>
				</div>
			</div>

		<?php endwhile;
		else :
		// no rows found
		endif;
		?>

	</div>
</div>

<div class="agenda">
    <ul class="nav nav-tabs" role="tablist">
		<?php
		if( have_rows('agenda') ): $i = 0;
		while ( have_rows('agenda') ) : the_row(); $i++; ?> 
		
 		<li role="presentation" <?php if ($i == '1') { ?>class="active"<?php } ?>><a href="#<?php echo $i; ?>" aria-controls="#<?php echo $i; ?>" role="tab" data-toggle="tab"><?php the_sub_field('date');?></a></li>
  		
  		<?php endwhile;
		else :
		// no rows found
		endif;
		?>
	</ul>

	<div class="tab-content">
	
		<?php if( have_rows('agenda') ): $i = 0;
		while ( have_rows('agenda') ) : the_row(); $i++; ?>
		
		<div role="tabpanel" class="tab-pane fade in <?php if ($i == '1') { ?>active<?php } ?>" id="<?php echo $i; ?>">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<section id="cd-timeline" class="cd-container">
						
						<?php if( have_rows('schedule') ): ; 
						while ( have_rows('schedule') ) : the_row();  ?>
		
							<div class="cd-timeline-block">
								<div class="cd-timeline-img"></div>
								<div class="cd-timeline-content">
									<h2><?php the_sub_field('title');?></h2>
									<span class="cd-date"><?php the_sub_field('time');?></span>
								</div> <!-- cd-timeline-content -->
							</div> <!-- cd-timeline-block -->
						
						<?php endwhile; endif; ?>
						
						</section> <!-- cd-timeline -->

<div class="col-md-12 text-center">
			<a href="http://go.digitalml.com/l/296922/2017-09-05/4lftd"><button class="large-event-btn">See Full Agenda</button></a>	
		</div>
					</div>
				</div>
			</div>
		</div>
		
		<?php endwhile; endif; ?>
		
	</div>
</div>

<HR SIZE="6">

<div class="row">
		<div class="col-md-12 text-center">
			<h2><font-color="white">Venue</font></h2>
			<h2><font size="5"><a href=http://convene.com/location/grandcentral">Convene Conference Center</a><br></br>101 Park Avenue, New York, NY</font></h2>
<iframe src="https://snazzymaps.com/embed/9615" width="100%" height="500px" style="border:none;"></iframe>
	</div>
	</div>

<div class="container-fluid past-presentations">
	<div class="row">
		<div class="col-md-12 text-center">
			<h2>Past Presenters</h2>
		</div>
	</div>
	<div class="row">
		
		<?php
		if( have_rows('past_presentations') ):
		while ( have_rows('past_presentations') ) : the_row(); ?>

			<div class="col-md-2 past-presentation">
				<img src="<?php the_sub_field('logo');?>" class="img-responsive">
			</div>

		<?php endwhile;
		else :
		// no rows found
		endif;
		?>

	</div>
</div>

<div id="content">

<?php if (have_posts()): ?>
<?php while (have_posts()) : the_post(); ?>

	<?php the_content(''); ?>

<?php endwhile; ?>
<?php endif; ?> 

</div>

<?php get_footer(); ?>


<?php get_footer(); ?>

