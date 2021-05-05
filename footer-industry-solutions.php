<?php global $page_url_home, $page_url_platform, $page_url_fasttrack, $page_url_resources, $page_url_aboutus, $page_url_careers; ?>

  <?php include get_template_directory() . '/sub-footer.php';?>

</div>

<script src="<?php echo get_template_directory_uri() ?>/dist/js/global.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/dist/js/menu-nav.js"></script>

<script type="text/javascript">
    piAId = '297922';
    piCId = '1214';
    (function () {
        function async_load() {
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.src = ('https:' == document.location.protocol ? 'https://pi' : 'http://cdn') + '.pardot.com/pd.js';
            var c = document.getElementsByTagName('script')[0];
            c.parentNode.insertBefore(s, c);
        }

        if (window.attachEvent) {
            window.attachEvent('onload', async_load);
        }
        else {
            window.addEventListener('load', async_load, false);
        }
    })();
</script>
<!-- Google Code for Remarketing Tag -->
<!--------------------------------------------------
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script>
	$(window).scroll(function(){
    if ($(window).scrollTop() >= 100) {
        $('header').addClass('fixed-header');
    }
    else {
        $('header').removeClass('fixed-header');
    }
});
</script>
<script>
	$(window).scroll(function(){
    if ($(window).scrollTop() >= 100) {
        $('header').addClass('fixed-header');
		$('header div.grid-center.container').addClass('decrease-margin');
    }
    else {
        $('header').removeClass('fixed-header');
		$('header div.grid-center.container').removeClass('decrease-margin');
    }
});
</script>

<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 861628206;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt=""
             src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/861628206/?guid=ON&amp;script=0"/>
    </div>
</noscript>
<script>
    window.addEventListener('load', function () {
        if (window.location.href.indexOf('/#consulBookOpen') != -1) {
            (new Image()).src = '//www.googleadservices.com/pagead/conversion/861628206/?label=xOtTCNuUrW4Qrs7tmgM&guid=ON&script=0';
        }
    });
</script>
<?php wp_footer(); ?>
</body>
</html>