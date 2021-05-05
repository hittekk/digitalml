<?php
/* todo: restrict to certain pages */
digitalml_get_template_part('partial-templates/_contact-form-overlay.php', array(
));

global $page_url_home, $page_url_platform, $page_url_fasttrack, $page_url_resources, $page_url_aboutus, $page_url_careers;
?>

<?php wp_footer(); ?>


<div class="container digitalml-footer">
	<div class="row">
		<footer>
			<nav>
				<a class="brand" href="<?= $page_url_home ?>"></a>

				<div class="flex-pad"></div>

				<div class="column">
					<div class="site-category"><a href="<?= $page_url_platform ?>">ignite Platform</a></div>

 					<ul>
						<li><a href="/ignite-plan/">Plan</a></li>
						<li><a href="/ignite-design/">Design</a></li>
						<li><a href="/ignite-build/">Build</a></li>
						<li><a href="/ignite-run/">Run</a></li>
						<li><a href="https://www.digitalml.com/releases/">Releases<a/></li>
					</ul>

				</div>

				<div class="column wide">
					<div class="site-category"><a href="<?= $page_url_fasttrack ?>">ignite Fast Track</a></div>
					<ul>
						<li><a href="<?= $page_url_fasttrack ?>#section-2">Strategic Alignment</a></li>
						<li><a href="<?= $page_url_fasttrack ?>#section-4">Quick Wins</a></li>
<?php /*
						<li><a href="/path/to/tbd">White Papers</a></li>
*/ ?>
					</ul>
				</div>

				<div class="column narrow">
					<div class="site-category"><a href="<?= $page_url_resources ?>">Resources</a></div>
					<ul>
						<li><a href="<?= $page_url_resources ?>#section-3">Articles</a></li>
						<li><a href="<?= $page_url_resources ?>#section-4">Videos</a></li>
						<li><a href="<?= $page_url_resources ?>#section-5">White Papers</a></li>
						<li><a href="<?= $page_url_resources ?>#section-6">Presentations</a></li>
						<li><a href="http://blog.digitalml.com">Blog</a></li>
<?php /*
						<li><a href="/path/to/tbd">Infographics</a></li>
						<li><a href="/path/to/tbd">Reports</a></li>
						<li><a href="/path/to/tbd">Case Studies</a></li>
						<li>&nbsp;</li>
						<li><a href="/path/to/tbd">Leadership Forum</a></li>
*/ ?>
					</ul>
				</div>

				<div class="column narrow">
					<div class="site-category"><a href="<?= $page_url_aboutus ?>">About us</a></div>
					<ul>
						<li><a href="<?= $page_url_aboutus ?>">Our Story</a></li>
						<li><a href="<?= $page_url_aboutus ?>#section-2">Our Leadership</a></li>
						<li><a href="<?= $page_url_aboutus ?>#section-3">Locations</a></li>
						<li><a href="<?= $page_url_careers ?>">Careers</a></li>

					</ul>
				</div>

				<div class="column">
          <div class="site-category hidden-xs hidden-sm"><span class="no-link">Help</span><?php /*<a href="<?php //path/to/tbd /?>">Help</a>*/?></div>
					<ul>
						<li><a href="tel:44 1433-424257">+44 1344 424257</a></li>
						<li><a href="tel:1-415-373-0300">+1-415-373-0300</a></li>
						<li><a href="<?= $page_url_aboutus ?>#section-1">Contact Us</a></li>
<?php /*
						<li><a href="/path/to/tbd">FAQ</a></li>
*/ ?>
					</ul>
					<div class="toe hidden-xs hidden-sm">
						<ul class="social-links list-inline">
							<?php digitalml_get_template_part('partial-templates/_social-links.php', array()); ?>
						</ul>
						<div class="digitalml-copyright">
							&copy;<?php echo date("Y"); ?> digitalml
						</div>
					</div>

				</div>
			</nav>
			<div class="heel hidden-md hidden-lg">
				<ul class="social-links list-inline">
					<?php digitalml_get_template_part('partial-templates/_social-links.php', array()); ?>
				</ul>
				<div class="digitalml-copyright">
					&copy;<?php echo date("Y"); ?> digitalml
				</div>
			</div>
		</footer>
	</div>
</div>

<script type="text/javascript">
piAId = '297922';
piCId = '1214';
(function() {
function async_load()
{ var s = document.createElement('script'); s.type = 'text/javascript'; s.src = ('https:' == document.location.protocol ? 'https://pi' : 'http://cdn') + '.pardot.com/pd.js'; var c = document.getElementsByTagName('script')[0]; c.parentNode.insertBefore(s, c); }
if(window.attachEvent)
{ window.attachEvent('onload', async_load); }
else
{ window.addEventListener('load', async_load, false); }
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
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/861628206/?guid=ON&amp;script=0"/>
</div>
</noscript>
<script>
window.addEventListener('load',function(){ 
if(window.location.href.indexOf('/#consulBookOpen') != -1){
 (new Image()).src = '//www.googleadservices.com/pagead/conversion/861628206/?label=xOtTCNuUrW4Qrs7tmgM&guid=ON&script=0';
}
});
</script>
</body>
</html>
