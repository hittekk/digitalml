
<?php digitalml_get_template_part('partial-templates/section-post-actions.php', array()); ?>

<?php 
	$args = array( 
		'post_type' => 'resource', 
		'orderby' => 'post_id', 
		'order' => 'DESC',
	);	
	$tax = array();
	
	
	if (isset($_GET['topics']) && $_GET['topics']) {
		$args['tax_query'][] = array(
								'taxonomy' => 'resource_topic',
								'field' => 'name',
								'terms' => explode(',',$_GET['topics']),
								'operator' => 'IN',
							);
	}
	if (isset($_GET['types']) && $_GET['types']) {
		$args['tax_query'][] = array(
								'taxonomy' => 'resource_type',
								'field' => 'name',
								'terms' => explode(',',$_GET['types']),
								'operator' => 'IN',
							);
	}
	if (isset($_GET['sort']) && $_GET['sort']) {
		$args['orderby'] = $_GET['sort'];
	}
	if (isset($_GET['dir']) && $_GET['dir']) {
		$args['order'] = $_GET['dir'];
	}
	
	if (isset($_GET['search']) && $_GET['search']) {
		$args['s'] = $_GET['search'];
	}
	 
	$loop = new WP_Query( 
		$args
	);

	?>
<div class="resources__container">
	<?php if ( $loop->have_posts() ) : ?>
		<?php if (!isset($args['s'])) : ?>
			<section class="resources-cards cards section">

				<div class="resources-cards__container container">

					<div class="resources-cards__row row">

						<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

							<?php digitalml_get_template_part('partial-templates/section-resources--cards.php', array()); ?>
						
						<?php endwhile; wp_reset_query(); ?>

					</div><!-- .resources-cards__row -->

				</div><!-- .resources-cards__container -->

			</section><!-- .resources-cards cards -->
		<?php else: ?>
			<section class="search-results results section">

				<div class="search-results__container container">
				
					<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
						
						<?php digitalml_get_template_part('partial-templates/section-resources--results.php', array()); ?>
					
					<?php endwhile; wp_reset_query(); ?>
					
				</div><!-- .search-results__container -->

			</section><!-- .search-results results -->
		<?php endif; ?>
	<?php else: ?>
		<section class="search-results results section">
			<div class="search-results__container container">
				<div class="search-results__row row">
					<p class="search-results__no-results">No results found</p>
				</div>
			</div>
		</section>
	<?php endif; ?>
</div><!-- .search-results__container -->