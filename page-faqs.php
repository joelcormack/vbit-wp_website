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
			<div class="container-fluid faq--header">
				<div class="container">
					<div class="row">
						<div class="faq--header-col col-sm-5 pt-3 align-self-center">
						<?php
							if ( function_exists('yoast_breadcrumb') ) {
  								yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
							}
						?>
							<h1><?php the_title(); ?></h1>
							<?php the_content(); ?>
						</div>
						<div class="faq--header-col col-sm-7 d-none d-sm-block">
							<img id="faq--header-img" class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/faq-header.png"  alt="Hands Holding VBit Coin" />
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid faq--body py-5">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<div class="accordion" id="accordionExample">
								<?php the_field('faq_left_column'); ?>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="accordion" id="accordionExample">
								<?php the_field('faq_right_column'); ?>
							</div>
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