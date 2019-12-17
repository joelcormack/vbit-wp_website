<?php
/**
 *
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header();
?>
	<div class="homepage-background"></div>
	<div id="primary">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/front-page/content' );
			get_template_part( 'template-parts/front-page/how-vbit-mining-works' );
			get_template_part( 'template-parts/vbit-packages-and-services' );
			get_template_part( 'template-parts/front-page/advert' );
			get_template_part( 'template-parts/client-success-stories' );

		endwhile; // End of the loop.
		?>

		</main>
	</div><!-- #primary -->

<?php
get_footer();