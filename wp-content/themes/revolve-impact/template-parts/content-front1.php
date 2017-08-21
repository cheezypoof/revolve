<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package revolve_impact
 */

?>

<div class="full-bleed front1 clearfix" style="background-image: url(http://localhost:8888/wp-content/uploads/2017/08/group1.png);">
	<div class="tagline">
		<?php 
		$description = get_bloginfo( 'description', 'display' );
		if ( $description || is_customize_preview() ) : ?>
			<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
		<?php
		endif; ?>
	</div><!-- #site-description -->
</div>
