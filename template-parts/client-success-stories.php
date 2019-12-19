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
            <h3 class="text-md-center mb-4 my-sm-4">Our clients are at the heart of everything we do.</h3>
            <?php

            $args = array(
                'post_type' => 'success_stories',
                'posts_per_page' => 3,
            );
            // The Query
            $the_query = new WP_Query( $args );
            
            // The Loop
            if ( $the_query->have_posts() ) {
                echo '<div class="row row-cols-1 row-cols-md-2">';
                while ( $the_query->have_posts() ) {
                    $the_query->the_post(); ?>
                    <div class="col-sm-6 col-lg-4 my-4 my-lg-0">
                        <div class="card h-100">  
                            <div class="card-body row no-gutters">  
                                <div class="col-lg-4">
                                    <img class="img-fluid rounded" src="<?php the_post_thumbnail_url(); ?>" />
                                </div>
                                <div class="col-lg-8 card-title my-3 my-lg-0 pl-lg-3">
                                    <h4><?php the_title(); ?></h4>
                                    <p class="star-rating">
                                        <?php 
                                        $rating = get_field('star_rating');
                                        for ($x = 0; $x <= 4; $x++) {
                                            if ($rating) {
                                            echo '<ion-icon name="star"></ion-icon>';
                                            --$rating;
                                            }
                                            else {
                                                echo '<ion-icon name="star-outline"></ion-icon>';
                                            }
                                        }
                                        ?></p>
                                </div>
                                <div class="card-text">
                                    <p class="text-muted"><?php echo get_the_date(); ?></p>
                                    <ion-icon name="quote"></ion-icon><blockquote><?php the_excerpt(); ?></blockquote>
                                </div>
                            </div>
                        </div><!-- card -->
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