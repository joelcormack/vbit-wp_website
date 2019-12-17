<?php
/**
 * Template part for displaying page content on front-page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underboot
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('front-page--how-minging-works container-fluid my-md-5'); ?>>
    <div class="row">
        <div class="container">
            
                <h2>Here's How VBit Mining Works</h2>
            
            <div class="col-md-10 offset-md-1 my-5">
                <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/here-is-how-vbit-mining-works.png" width="" height="" alt="Diagram on How VBit Minging Works" />
            </div>
        </div> 
    </div><!-- row -->
</article>