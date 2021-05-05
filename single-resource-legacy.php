<?php
/*
Template Name: Resource Detail Template
*/
get_header();
?>

<?php
if (have_posts()) : the_post();
	$meta = get_post_meta(get_the_ID());
	$previewclass = 'empty';
	$previewstyle = '';
	$previewcontent = '';
	$resourceurl = 'http://www.adobe.com/support/ovation/ts/docs/ovation_test_show.ppt';
	if( has_post_thumbnail() ) {
		$thumbnail_url = get_the_post_thumbnail_url( $post, 'full' );
	} else {
		$thumbnail_url = get_template_directory_uri() . "/images/default-resource-preview.png";
	}
	/*
	if( $meta['_resource_videoid'][0] ) {
		$previewclass = 'video';
		if( $meta['_resource_videoservice'][0] == 'YouTube' ) {
			$previewcontent = '<a href="https://www.youtube.com/watch?v=' . $meta['_resource_videoid'][0] . '" rel="wp-video-lightbox" title="' . htmlspecialchars($meta['_resource_videotext'][0]) . '" class="btn btn-block" >';
			$previewcontent .= '<span class="video-play"></span><span class="video-text">' . $meta['_resource_videotext'][0] . '</span>';
			$previewcontent .= '</a>';
		} else {
			$previewcontent = '<a href="https://vimeo.com/' . $meta['_resource_videoid'][0] . '" rel="wp-video-lightbox" title="' . htmlspecialchars($meta['_resource_videotext'][0]) . '" class="btn btn-block" >';
			$previewcontent .= '<span class="video-play"></span>' . $meta['_resource_videotext'][0];
			$previewcontent .= '</a>';
		}
		$previewstyle = ' style="background-image: url(' . $meta['_resource_videoimage'][0] . ')"';
	} else if( $meta['_resource_previewimage'][0] ) {
		$previewclass = 'image';
		$previewstyle = ' style="background-image: url(' . $meta['_resource_heroimage'][0] . ')"';
	}*/
    ?>
    <div class="container resource-single-preview <?= $previewclass ?>"<?= $previewstyle ?>><?= $previewcontent ?>
    </div>
    <div class="container portfolio-single">
        <div class="row">
	        <div class="banner clearfix">
		        <div class="logo-wrap col-sm-4"><img class="img-responsive" src="<?= $thumbnail_url; ?>" /></div>
		        <div class="title-wrap col-sm-8">
			        <h1><?= the_title(); ?></h1>
			        <div class="viewer"><?php echo do_shortcode('[embeddoc url="' . $resourceurl . '" download="all" viewer="google"]'); ?></div>
		        </div>
	        </div>
        </div>
    </div>
<?php endif; ?>

<?php get_footer(); ?>
