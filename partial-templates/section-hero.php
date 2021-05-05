<?php

// ACF
$hero                   = get_field('hero');

$general                = $hero['general'];
$headline               = $general['headline'];
$lead                   = $general['lead'];

$style                  = $hero['style'];
$background_image       = $style['background_image'];

?>

<section id="hero-resources" class="hero-dynamic hero-resources">
    
    <div class="hero-dynamic__container container" style="background-image: url('<?php echo $background_image; ?>');">

        <div class="hero-dynamic__row row">
        
            <div class="col-xs-12">
            
                <div class="hero-dynamic__wrapper">
                    
                    <h2 class="hero-dynamic__headline">
                        <?php echo $headline; ?>
                    </h2>

                    <p class="hero-dynamic__lead">
                        <?php echo $lead; ?>
                    </p>

                </div><!-- .hero-dynamic__wrapper -->

            </div>
        
        </div><!-- .hero-dynamic__row -->

    </div><!-- .hero-dynamic__container -->

</section><!-- .hero-dynamic -->