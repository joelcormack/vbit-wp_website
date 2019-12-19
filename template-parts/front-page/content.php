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
		<div class="col-md-6 col-lg-5 offset-lg-1">

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

			<div class="entry-content pr-4">
				<?php
				the_content();

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'underboot' ),
					'after'  => '</div>',
				) );
				?>
			</div>

			<?php if ( get_edit_post_link() ) : ?>
				<footer class="entry-footer">
					<?php
					edit_post_link(
						sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Edit <span class="screen-reader-text">%s</span>', 'underboot' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							get_the_title()
						),
						'<span class="edit-link">',
						'</span>'
					);
					?>
				</footer>
			<?php endif; ?>
		</div>
		<div class="col-md-6 col-lg-5 d-none d-md-block">
			<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-page-header-vbit-graphic.png" alt="VBit header graphic" />
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
