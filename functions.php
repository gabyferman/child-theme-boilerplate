<?php
/**
 * Child Theme Functions.
 */

/**
 * Register and enqueue child theme styles.
 */
function child_theme_enqueue_styles() {
    // Parent style id.
    $parent_style = 'parent-style';

    // Enqueue main chikd theme style.
    wp_enqueue_style(
        'child-style',
        get_theme_file_uri('/css/child-style.css'),
        [
            $parent_style
        ],
        false
    );
}
add_action('wp_enqueue_scripts', 'child_theme_enqueue_styles');

/**
 * Register and enqueue child theme scripts.
 */
function child_theme_enqueue_scripts() {
    // Parent style id.
    $parent_style = 'parent-style';

    // Enqueue main chikd theme style.
    wp_enqueue_script(
        'child-functions',
        get_theme_file_uri('/js/child-functions.js'),
        [

        ],
        false,
        true
    );
}
add_action('wp_enqueue_scripts', 'child_theme_enqueue_scripts');

// Custom functions for this theme.
require_once get_theme_file_path() . '/inc/helpers.php';

// Keep editing your function.php file
