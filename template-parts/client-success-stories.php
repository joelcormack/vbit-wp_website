<?php
/**
 * Template part for displaying page content on front-page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underboot
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('client-success-stories container-fluid py-4'); ?>>
    <div class="row">
        <div class="container">
            <h2 class="text-md-center">Client Success Stories</h2>
            <h3 class="text-md-center my-4">Our clients are at the heart of everything we do.</h3>
            <?php

            $args = array(
                'post_type' => 'success_stories',
                'posts_per_page' => 3,
            );
            // The Query
            $the_query = new WP_Query( $args );
            
            // The Loop
            if ( $the_query->have_posts() ) {
                echo '<div class="card-deck">';
                while ( $the_query->have_posts() ) {
                    $the_query->the_post(); ?>
                        <div class="card">  
                            <div class="card-body row no-gutters">
                                      
                                    <div class="col-md-4">
                                        <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" />
                                        <?php the_date(); ?>
                                    </div>
                                    <h5 class="col-md-8 card-title">
                                        <?php the_title(); ?>
                                        <?php the_field('star_rating'); ?>
                                    </h5>
                                    <div class="card-text">
                                        <?php the_content(); ?>
                                    </div>
                                
                            </div>
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