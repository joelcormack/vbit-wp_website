<?php
/**** Included files ****/
include('custom-shortcodes.php');




/**** Load style sheets and scripts ****/
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
 
    $parent_style = 'parent-style';
    /***** styles *****/
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );    
    /*** scripts *****/
    wp_enqueue_script( 'ionicons', 'https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js' );
}
add_action( 'after_setup_theme', 'register_footer_menus' );
 


/**** Menus ******/
function register_footer_menus() {
    register_nav_menu( 'footer-links', __( 'Footer Links Menu', 'theme-text-domain' ) );
    register_nav_menu( 'footer-extra', __( 'Footer Extra Menu', 'theme-text-domain' ) );
}


/**
 * Filter the except length to 55 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 55;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );