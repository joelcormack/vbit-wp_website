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

	<div id="primary" class="">
		<main id="main" class="">

		<?php
		while ( have_posts() ) :
			the_post(); ?>
			<div class="container-fluid how-vbit-mining-works--header">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<h1><?php the_title(); ?></h1>
							<?php the_content(); ?>
						</div>
						<div class="col-sm-6">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hands-holding-vbit-coin.png" class="img-fluid" alt="Hands Holding VBit Coin" />
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="embed-responsive embed-responsive-16by9">
							<?php the_field('video_one'); ?>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="embed-responsive embed-responsive-16by9">
							<?php the_field('video_two'); ?>
						</div>
					</div>
					<div class="col-sm-8">
					<div class="embed-responsive embed-responsive-16by9">
						<?php the_field('video_three'); ?>
					</div>
					</div>
					<div class="col-sm-4">
					<div class="embed-container">
						
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