<?php
/**
* Template Name: Webinar Search Results
*/

global $post, $page_url_home, $page_url_platform, $page_url_fasttrack, $page_url_resources, $page_url_aboutus;

$class = "webinar";

get_header('2021-gray'); ?>

<?php if ( have_posts() ) : ?>

    <?php digitalml_get_template_part('partial-templates/section-hero.php', array()); ?>

<?php endif; ?>

<?php get_footer('home'); ?>