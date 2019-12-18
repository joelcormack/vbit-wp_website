<?php
/**
 * Template part for displaying page content on front-page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underboot
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('container-fluid py-4'); ?>>
    <div class="row">
        <div class="col-sm-10 offset-sm-1">
            <section class="container call-to-action py-3">
                <div class="row">
                    <div class="col-8 offset-2 mb-3">
                        <img class="img-fluid" alt="Open Box" src="<?php echo get_stylesheet_directory_uri(); ?>/img/currency-sign.png" />
                    </div>
                    <div class="col-sm-8">
                    <h4 class="">“Want to Join Millions of Ordinary People Who Are Making Steady Passive Income With VBit?”</h4>
                    <p>Click the Button Below and Get Started Immediately</p>
                    <a href=""><button class="btn btn-blue">Start Mining Today</button></a>

                    </div>
                </div>
            </section>
        </div>
    </div><!-- row -->
</article>