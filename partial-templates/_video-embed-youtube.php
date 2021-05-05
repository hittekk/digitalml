<?php
/**
 * required args
 *  - video_id
 *  - video_title
 */

$the_video_id = $this->video_id;
$the_video_title = $this->video_title;
$the_video_thumburl = $this->video_thumburl;
?>

<div class="video-embed" style="background-image: url(<?= $the_video_thumburl ?>)">
	<?php /* echo do_shortcode('[video_lightbox_youtube video_id="' . $the_video_id . '" width="1280" height="960" anchor='. $this->video_thumburl . ' alt=' . $this->video_title . ']'); */ ?>
	<a href="https://www.youtube.com/watch?v=<?= $the_video_id ?>" rel="wp-video-lightbox" title="<?php echo htmlspecialchars($the_video_title); ?>" class="btn btn-block" ></a>
</div>