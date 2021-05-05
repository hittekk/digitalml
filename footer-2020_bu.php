<?php global $page_url_home, $page_url_platform, $page_url_fasttrack, $page_url_resources, $page_url_aboutus, $page_url_careers; ?>
    <footer class="footer footer2020">
        <div class="container">
            <ul class="footer-nav">
                <li><a href="digitalml.com/ignite-platform">ignite Platform</a></li>
                <li><a href="http://blog.digitalml.com/api-economy/">Industry Solutions</a></li>
                <li><a href="http://blog.digitalml.com/">Knowledge Center</a></li>
                <li><a href="digitalml.com/about-us">Company</a></li>
                <li><a href="digitalml.com/contact">Contact Us</a></li>
            </ul>
            <p class="copyright">Copyright by digitalML. <?= date('Y') ?></p>
        </div>
    </footer>

</div> <!-- sticky container -->
</div> <!-- wrapper -->
<script src="<?php echo get_template_directory_uri() ?>/dist/js/global.js"></script>
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