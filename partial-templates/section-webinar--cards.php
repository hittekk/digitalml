<?php

// vars
$settings           = get_field('webinar_settings');

$toggle_subtitle    = $settings['toggle_subtitle'];
$subtitle           = $settings['subtitle'];

$terms      = get_the_terms( get_the_ID(), 'webinar_types' );

if ( !empty( $terms ) ){
	// get the first term
	$term = array_shift( $terms );
}

// taxonomy vars
$resources_types       = get_field('webinar_types', $term);
$image                 = $resources_types['image'];
$label_color           = $resources_types['label_color'];

?>

<div class="resources-card card col-xs-12 col-sm-6 col-md-6 col-lg-4">
	<a href="<?php the_permalink(); ?>" class="resources-card__wrapper">
		<div class="resources-card__header" style="background-image: url('<?php echo $image; ?>');"></div>

		<div class="resources-card__body">
			<h4 class="resources-card__title">
				<?php the_title(); ?>
			</h4>

			<?php if ( $toggle_subtitle == 1 ) : ?>
				<p class="resources-card__subtitle">
					<?php echo $subtitle; ?>
				</p>
			<?php else : ?>
				<?php echo '<p class="resources-card__subtitle">' . resources_excerpts(12) . '</p>' ?>
			<?php endif; ?>
		</div>

		<div class="resources-card__footer">
			<p class="resources-card__type resources-card__type--<?php echo $term->slug; ?>" style="background:<?php echo $label_color; ?>;">
				<?php echo $term->name; ?>
			</p>
		</div>
	</a>
</div><!-- .resource-card -->