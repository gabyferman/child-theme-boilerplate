<?php
/**
 *
 * Child Theme Functions
 * 
 */

/**
 *
 * Enqueue the parent style.css
 *
 * @since 1.0
 */
add_action( 'wp_enqueue_scripts', 'your_child_theme_enqueue_styles' );
function your_child_theme_enqueue_styles() {

    // Parent style id - replace your child theme name
    $parent_style = 'parent-style';
    
    // Enqueue Parent theme's style
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

    // Enqueue Child theme's style 
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ) );
    
    
}


//Start editing your function.php file
