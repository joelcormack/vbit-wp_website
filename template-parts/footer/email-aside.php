<?php
/**
 * Template part for displaying page content on front-page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underboot
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('container-fluid py-4 email-aside'); ?>>
    <div class="row">
        <div class="col-sm-10 offset-sm-1">
            <section class="container py-3">
                <div class="row">
                    <div class="col mb-3">
                        <h3>Any Questions? Email Us At</h3>
                        <ion-icon name="mail"></ion-icon> <a href="mailto:support@vbittech.com">support@vbittech.com</a>
                    </div>
                </div>
            </section>
        </div>
    </div><!-- row -->
</article>