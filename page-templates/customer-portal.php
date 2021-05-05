<?php
/* Template Name: Customer Portal
 *
 * @package digitalML
 */

get_header();
global $post;
?>
<div class="page-customer-portal">
<?php
	if (have_posts()) { the_post();
?>
		<div class="container-fluid hero" id="section-1">
			<div class="row">
        <div class="module-wrap">
          <div class="module image-module">
						<span class="image-wrap" <?php /* [setimagebg] */ ?>>&nbsp; 
							<span id="platform-hero-overlay-wrap" class="overlay-wrap">&nbsp;<span id="platform-hero-overlay" class="overlay">&nbsp;</span></span>
            </span>

            <div class="body-wrap">
              <div class="body">
                <div class="customer-login-form">
                    <h1><?php the_title() ?></h1>
                    <div class="content"><?php the_content() ?></div>
                    <form action="" class="light-form">
                      <div class="form-group">
                        <label for="cl_username">Username</label>
                        <input type="text" class="form-control" id="cl_username" name="cl_username" placeholder="Username">
                      </div>

                      <div class="form-group">
                        <label for="cl_password">Password</label>
                        <input type="password" class="form-control" id="cl_password" name="cl_password" placeholder="Password">
                      </div>

                      <button type="submit" class="btn btn-default">Login</button>
                    </form>
                </div>
              </div><!-- end .body -->
            </div><!-- end .body-wrap -->
          </div><!-- end module -->
        </div><!-- end module-wrap -->
			</div><!-- end row -->
		</div><!-- end container-fluid -->
<?php } else { ?>
		<div class="container">
			<div class="row">
				<h1>Page Not Found</h1>
		        <p>That's odd.</p>
			</div>
		</div>
<?php } ?>
</div>

<?php get_footer(); ?>

