<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package revolve_impact
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php
			get_template_part( 'template-parts/content', 'front1' );
			get_template_part( 'template-parts/content', 'front2' );
			get_template_part( 'template-parts/content', 'front3' );
			get_template_part( 'template-parts/content', 'programs');
			get_template_part( 'template-parts/content', 'donate');
			?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
