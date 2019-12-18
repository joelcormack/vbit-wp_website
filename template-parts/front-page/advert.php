<?php
/**
 * Template part for displaying page content on front-page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underboot
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('advert container-fluid py-5'); ?>>
    <div class="row">
        <div class="container ">
            <img class="mb-4" alt="Open Box" src="<?php echo get_stylesheet_directory_uri(); ?>/img/open-box.png" />
            <p class="font-weight-bold">Every VBit Package Includes:</p>
            <h2 class="font-white my-4">One Year Free Hosting and Maintenance</h2>
            <h4 class="font-small-bold font-white">The Best Mining Equipment Available:</h4>
            <p class="font-small-bold my-4">The Superior ASIC SHA-256 Algorithm Processing Chips Will Give You Unlimited Earning Potential</p>
        </div> 
    </div><!-- row -->
</article>