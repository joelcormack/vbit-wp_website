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

echo '<div class="how-vbit-mining-works">';
get_header();
echo '</div>';
?>

	<div id="primary" class="how-vbit-mining-works">
		<main id="main" class="container">

		<?php
		while ( have_posts() ) :
			the_post(); ?>
			<div class="row">
				<div class="col">
					<?php get_template_part( 'template-parts/content', 'page' );?>
				</div>
				<div class="col">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hands-holding-vbit-coin.png" class="" alt="Hands Holding VBit Coin" />
				</div>
			</div>
<?php
			
			

		endwhile; // End of the loop.
		?>

		</main>
	</div><!-- #primary -->

<?php
get_footer();