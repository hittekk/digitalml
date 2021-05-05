<?php
/**
* Template Name: Webinar
*/

//ACF

global $post, $page_url_home, $page_url_platform, $page_url_fasttrack, $page_url_resources, $page_url_aboutus;

get_header('2021-gray'); ?>

<div class="resources__wrapper">

    <?php digitalml_get_template_part('partial-templates/section-hero-webinar.php', array()); ?>

    <?php digitalml_get_template_part('partial-templates/section-webinars.php', array()); ?>

</div><!-- .resource__wrapper -->

<?php get_footer('home'); ?>