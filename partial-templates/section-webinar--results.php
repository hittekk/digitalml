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
$results_icon          = $resources_types['results_icon'];
$label_color           = $resources_types['label_color'];

?>

<div class="search-results__row row">

	<div class="search-item col-xs-12 col-sm-10 col-md-7">

		<!-- Add the_permalink(); to search-item__wrapper -->
		<a href="<?php the_permalink(); ?>" target="_self" class="search-item__wrapper">

			<div class="search-item__icon">
				<img src="<?php echo $results_icon; ?>" alt="" class="search-item__icon--image">
			</div>

			<div class="search-item__content">

				<h4 class="search-item__title">
					<?php the_title(); ?>
				</h4>
				
				<?php if ( $toggle_subtitle == 1 ) : ?>
					<p class="search-item__subtitle">
						<?php echo $subtitle; ?>
					</p>
				<?php else : ?>
					<?php echo '<p class="search-item__subtitle">' . resources_excerpts(12) . '</p>' ?>
				<?php endif; ?>


				<p class="search-item__type search-item__type--<?php echo $term->slug; ?>" style="background:<?php echo $label_color; ?>;">
					<?php echo $term->name; ?>
				</p>

			</div><!-- .search-item__content -->

		</a><!-- .search-item__wrapper -->

	</div><!-- .search-results-item -->

</div><!-- .search-results__row -->

<!-- end of loop -->

