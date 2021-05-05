<?php
/**
 * The template for displaying single Webinar posts
 *
 */

// ACF
$settings           = get_field('webinar_settings');
$toggle_sidebar     = $settings['toggle_sidebar'];

global $post, $page_url_home, $page_url_platform, $page_url_fasttrack, $page_url_resources, $page_url_aboutus;

get_header('2021-gray'); ?>

<section id="webinar-post" class="single-post webinar-post">

    <div class="single-post__wrapper">

        <div class="single-post__container container">

            <main id="primary" class="single-post__row row <?php echo $toggle_sidebar == 0 ? 'align-center' : 'align-justify' ?>">

                <?php while( have_posts() ) : the_post(); 

                // vars
                $settings           = get_field('webinar_settings');

                $toggle_subtitle    = $settings['toggle_subtitle'];
                $subtitle           = $settings['subtitle'];

                $toggle_sidebar     = $settings['toggle_sidebar'];
                $widget_type        = $settings['widget_type'];
                $widget_code        = $settings['widget_code'];
                
                $terms      = get_the_terms( get_the_ID(), 'webinar_types' );

                if ( !empty( $terms ) ){
                    // get the first term
                    $term = array_shift( $terms );
                }
                
                ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class( 'single-post__main col-xs-12 col-md-7 col-lg-7' ); ?>>
                    <p class="single-post__type single-post__type--<?php echo $term->slug; ?>">
                        <?php echo $term->name; ?>
                    </p>

                    <h2 class="single-post__headline">
                        <?php the_title(); ?>
                    </h2>

                    <?php if ( $toggle_subtitle == 1 ) : ?>
                    <p class="single-post__subtitle">
                        <?php echo $subtitle; ?>
                    </p>
                    <?php endif; ?>
                    
                    <div class="single-post__body">
                        <?php the_content(); ?>
                    </div>
                </article>

                <?php if ( $toggle_sidebar == 1 ) : ?>
                <aside class="single-post__sidebar col-xs-12 col-md-5 col-lg-4">
                    <div class="single-post-widget">
                        <?php if ( $widget_type == 'shortcode' ) : ?>
                            <!-- null for now -->
                        <?php else : ?>
                            <?php echo $widget_code; ?>
                        <?php endif; ?>
                    </div>
                </aside>
                <?php endif; ?>

                <?php endwhile; ?>
            
            </main><!-- .single-post__row -->

        </div><!-- .single-post__container -->

    </div><!-- .single-post__wrapper -->

</section><!-- .single-post -->

<?php digitalml_get_template_part('partial-templates/section-contact-cta.php', array()); ?>

<script>
/*
MIT License

Copyright (c) 2019 Jacob Filipp

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
*/



// Add this script to the <b>parent page on which your iFrame is embedded</b>
// This code resizes the iFrame's height in response to a postMessage from the child iFrame



// event.data - the object that the iframe sent us
// event.origin - the URL from which the message came
// event.source - a reference to the 'window' object that sent the message
function gotResizeMessage(event)
{
	console.log( "got resize message: " + JSON.stringify(event.data))
	
	var matches = document.querySelectorAll('iframe'); // iterate through all iFrames on page
	for (i=0; i<matches.length; i++)
	{
		if( matches[i].contentWindow == event.source ) // found the iFrame that sent us a message
		{
			console.log("found iframe that sent a message: " + matches[i].src)
				
			//matches[i].width = Number( event.data.width )	 <--- we do not do anything with the page width for now
			matches[i].height = Number( event.data.height )
			
			return 1;
		}
	}
}
	    
document.addEventListener("DOMContentLoaded", function(){
	
	window.addEventListener("message", gotResizeMessage, false)
	
}); //on DOM ready
</script>


<?php get_footer('home'); ?>