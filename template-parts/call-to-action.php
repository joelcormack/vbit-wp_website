<?php
/**
 * Template part for displaying page content on front-page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underboot
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('container-fluid py-5'); ?>>
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <section class="container call-to-action box-shadow py-5">
                <div class="row">
                    <div class="col-sm-4 mb-3">
                        <img class="img-fluid" alt="Open Box" src="<?php echo get_stylesheet_directory_uri(); ?>/img/currency-sign.png" />
                    </div>
                    <div class="col-sm-8 call-to-action--text">
                    <h4 class="my-3 text-blue">“Want to Join Millions of Ordinary People Who Are Making Steady Passive Income With VBit?”</h4>
                    <p>Click the Button Below and Get Started Immediately</p>
                    <a href=""><button class="btn btn-blue float-sm-left">Start Mining Today</button></a>

                    </div>
                </div>
            </section>
        </div>
    </div><!-- row -->
</article>