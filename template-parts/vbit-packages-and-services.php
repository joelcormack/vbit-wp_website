<?php
/**
 * Template part for displaying page content on front-page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underboot
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('packages-and-services container-fluid pt-5'); ?>>
    <div class="row">
        <div class="container">
            <h2>VBit Packages and Services</h2>
            <h3 class="my-4">We'll Help You Earn Passive Bitcoin Income, With Unlimited Earning Potential</h3>
            <?php

            $args = array(
                'post_type' => 'package',
                'posts_per_page' => -1,
                'meta_key' => 'cost',
                'orderby' => 'meta_value_num',
                'order'=> 'ASC',
            );
            // The Query
            $the_query = new WP_Query( $args );
            
            // The Loop
            if ( $the_query->have_posts() ) {
                echo '<div class="row">';
                while ( $the_query->have_posts() ) {
                    $the_query->the_post(); ?>
                        <div class="col-sm-6 col-md-4 my-3">
                            <article class="package-block mt-md-4">
                                <div class="d-flex">
                                    <div class="package package-left-section" style="border-bottom-color:<?php echo get_field('package_colour'); ?>">
                                        <h4><?php the_title(); ?></h4>  
                                        <span><?php the_field('marketing_name'); ?></span>  
                                        <span><?php the_field('size'); ?> GH/s</span>  
                                    </div>
                                    <div class="package package-right-section">
                                        <div class="package-cost-section">
                                            <span class="cost">$<?php the_field('cost'); ?></span>
                                            <?php if( get_field('cost_per_month') ): ?>
                                                <span class="cost-per-month">$ <?php the_field('cost_per_month'); ?>/ Month</span> 
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="package package-underneath">
                                    <span><strong><?php the_field('take_home_pay'); ?>%</strong>  Take Home Pay</span>  
                                    <span><strong><?php the_field('auto_rebuy'); ?>%</strong> Auto-rebuy used for upgrading your machines</span>  
                                    <a href="<?php the_field('sign_up_link'); ?>">
                                        <button class="btn">Sign Up</button>
                                    </a>
                                </div>
                            </article>
                        </div>
                <?php
                }
                echo '</div>';
            } else {
                // no posts found
            }
            /* Restore original Post Data */
            wp_reset_postdata();
            ?>
        </div>
    </div><!-- row -->
</article>