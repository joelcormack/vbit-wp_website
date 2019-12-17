<?php
/**
 * Template part for displaying page content on front-page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underboot
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('front-page--advert container-fluid py-md-5'); ?>>
    <div class="row">
        <div class="container ">
            <img alt="Open Box" src="<?php echo get_stylesheet_directory_uri(); ?>/img/open-box.png" />
            <p>Every VBit Package Includes:</p>
            <h2>One Year Free Hosting and Maintenance</h2>
            <h4>The Best Mining Equipment Available:</h4>
            <p>The Superior ASIC SHA-256 Algorithm Processing Chips Will Give You Unlimited Earning Potential</p>
        </div> 
    </div><!-- row -->
</article>