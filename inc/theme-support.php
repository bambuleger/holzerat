<?php
  /*
    Theme Support Functions
    @package holzerat
  */

/*
============================================================
Theme Support
============================================================
*/

// $options = get_option( 'post_formats' );
// $formats = array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' );
// $output = array();
// foreach ( $formats as $format ){
//     $output[] = ( @$options[$format] == 1 ? $format : '' );
// }
// if( !empty( $options ) ){
//     add_theme_support( 'post-formats', $output );
// }

// $header = get_option( 'custom_header' );
// if( @$header == 1 ){
//     add_theme_support( 'custom-header' );
// }
//
// $background = get_option( 'custom_background' );
// if( @$background == 1 ){
//     add_theme_support( 'custom-background' );
// }


add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-background' );
add_theme_support( 'post-thumbnails' );

/* Activate Nav Menu */
function holzer_register_nav_menu(){
register_nav_menu('primary_navigation', 'Header Navigation');
};
add_action( 'after_setup_theme', 'holzer_register_nav_menu' );
