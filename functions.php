<?php
 @ini_set('display_errors', '0');
 error_reporting(0);
//  (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
 
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',  get_stylesheet_directory_uri() . '/style.css', array('parent-style') );
}

if( !function_exists( 'p_unregister_post_type' ) ) {
    function p_unregister_post_type(){
        unregister_post_type( 'project' );
    }
}
add_action('init','p_unregister_post_type');