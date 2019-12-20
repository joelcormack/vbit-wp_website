<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underboot
 */

?>
	
	
</div><!-- #content -->	
	
	<footer id="footer" class="site-footer">
    <?php get_template_part( 'template-parts/footer/email-aside' );?>
		<?php do_action('underboot_footer'); ?>
    
		<div class="container footer-nav py-4">
			<div class="site-info row">
				<div class="col-sm-6">
					<div class="row">
						<div class="col-sm">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/vbit-logo-white.png" class="custom-logo mb-4" alt="vbit-logo" />
							<a href="mailto:support@vbittech.com">support@vbittech.com</a>
						</div>
						
						<div class="col-sm my-4 my-md-0">
							<h4>Links</h4>
							<?php wp_nav_menu(
									array(
										'theme_location'  => 'footer-links',
										//'container'       => 'div',
										'menu_id'         => false,
										'menu_class'      => 'navbar-nav',
										'depth'           => 1,
									)
								);?>
						</div>
					</div>
				</div>
				
				<div class="col-sm-6 mb-3 mb-md-0">
					<div class="row">
						<div class="col-sm">
							<h4>Our Address</h4>
							<address>
								<ul class="navbar-nav">
									<li>1652 Washington Avenue</li>
									<li>Philadelphia, PA 19146</li>
								</ul>
							</address>
						</div>

						<div class="col-sm mb-4 mb-md-0">
							<?php wp_nav_menu(
								array(
									'theme_location'  => 'footer-extra',
									//'container'       => 'div',
									'menu_id'         => false,
									'menu_class'      => 'navbar-nav',
									'depth'           => 1,
								)
							);?>
						</div>
						<div class="col-12">
							<div class="mail-chimp">
								<!-- Begin Mailchimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; width:100%;}
	/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="https://joelcormack.us4.list-manage.com/subscribe/post?u=48dd792276dacc99de09d246d&amp;id=dc3df8050d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
		<label for="mce-EMAIL">Join Our Newsletter</label>
		<p>Be the first to receive the latest news, valuable content and cool opportunities VBit has to offer! Don’t forget to follow us on our social media channels.</p>
		<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
		<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
		<div style="position: absolute; left: -5000px;" aria-hidden="true">
			<input type="text" name="b_48dd792276dacc99de09d246d_dc3df8050d" tabindex="-1" value="">
		</div>
		<div class="clear"><input type="submit" value="SUBSCRIBE" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
		<div class="footer-ion-icons mt-3">
			<a href="https://www.facebook.com/vbittech/" target="_blank">
				<ion-icon name="logo-facebook"></ion-icon>
			</a>
			<a href="https://twitter.com/vbit_tech" target="_blank">
				<ion-icon name="logo-twitter"></ion-icon>
			</a>
			<a href="https://www.youtube.com/channel/UCaPfLi0OIVviM_7OFCD0UzA" target="_blank">
				<ion-icon name="logo-youtube"></ion-icon>
			</a>
			<a href="https://www.instagram.com/vbit_tech/" target="_blank">
				<ion-icon name="logo-instagram"></ion-icon>
			</a>
		</div>
    </div>
</form>
</div>

<!--End mc_embed_signup-->
							</div>
						</div>
					</div>
				</div>
			</div><!-- .site-info -->
		</div><!-- .container -->

	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>