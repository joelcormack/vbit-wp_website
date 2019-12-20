<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underboot
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>
	<div class="row">
		<div class="col-md-6 col-lg-5 offset-lg-1 align-self-center">

			<?php
			the_post_thumbnail( 'underboot-cover-image',
					array( 
						'class' => 'img-fluid rounded pb-4' 
					)
			);
			?>

			<?php if( get_theme_mod('hide_page_title') != true ) { ?>
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header>
			<?php } ?>

			<div class="entry-content pr-sm-4">
				<?php
				the_content();

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'underboot' ),
					'after'  => '</div>',
				) );
				?>
			</div>
		</div>
		<div class="col-md-6 col-lg-5 d-none d-md-block">
			<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-page-header-vbit-graphic.png" alt="VBit header graphic" />
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
