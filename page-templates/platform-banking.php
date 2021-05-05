<?php
/* Template Name: Platform-Banking page Template
 *
 * @package digitalML
 */

get_header();
global $post;
?>

<?php
	if (have_posts()) { the_post();
?>
<?php
        /** TODO:
         * output the platform banking page section-by-section, pulling editable content as needed from custom fields defined in lib/platform-bankingpage-data.php
         *
         * example: custom fields such as
         *  section 1/hero content
         *  section 2/business-it content (if any)
         *  section 3/ignite-boxes content (if any)
         *  etc.
         */
?>

		<div class="container">
			<div class="row">
				<div id="section-1" class="module hero image-module"></div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div id="section-2" class="module mobile-deposits combo-module"></div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div id="section-3" class="module portfolio icon-list-module"></div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div id="section-4" class="module tasks diagram-module"></div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div id="section-5" class="module run logofarm-module"></div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div id="section-6" class="module reuse icon-module"></div>
			</div>
		</div>

<?php } else { ?>
		<div class="container">
			<div class="row">
				<h1>Page Not Found</h1>
		        <p>That's odd.</p>
			</div>
		</div>
<?php } ?>


<?php get_footer(); ?>

