<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package revolve_impact
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-footer--left">
			<div class="contact-information">
				<h2 class="margin-me">CONTACT US</h2>
				<span>MAIL:</span>
				<span class="margin-me">Social Impact Fund</span>
				<span>6380 Wilshire Blvd. 15th Fl.</span>
				<span class="margin-me">Los Angeles, CA 90048</span>
				<span>Tel: (917) 653-2513</span>
				<div class="social-links">
					<a href="#" class="fb-link">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/fb-icon.svg" />
					</a>
					<a href="#" class="twit-link">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter-icon.svg" />
					</a>
				</div>
			</div>
		</div>
		<div class="site-footer--right">
			<form class="contact-form">
				<h3>Drop Us a Line</h3>
				<input type="text" name="Name" placeholder="Name">
				<input type="text" name="Email" placeholder="Email">
				<input type="text" name="Subject" placeholder="Subject">
				<textarea placeholder="Message"></textarea>
				<input type="submit" value="SEND" class="button">
			</form>
		</div>
		<div class="site-footer--trademark">
			<span>©2016 Social Impact Fund. All Rights Reserved.</span>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
