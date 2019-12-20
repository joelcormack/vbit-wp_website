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

echo '<div class="faq">';
get_header();
echo '</div>';
?>

	<div id="primary">
		<main id="main">

		<?php
		while ( have_posts() ) :
			the_post(); ?>
			<div class="container-fluid faq">
				<div class="container">
					<div class="row">
						<div class="col-sm-5 align-self-center">
							<h1><?php the_title(); ?></h1>
							<?php the_content(); ?>
						</div>
						<div class="col-sm-7">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/faq-header.png" class="img-fluid" alt="Hands Holding VBit Coin" />
						</div>
					</div>
				</div>
			</div>

<?php
			
			

		endwhile; // End of the loop.
		?>

		</main>
	</div><!-- #primary -->

<?php
get_footer();