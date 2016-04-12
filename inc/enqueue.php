<?php
/*
  @package holzerat
*/
function holzer_load_scripts(){
   //css
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6', 'all' );
    wp_enqueue_style( 'holzercss', get_template_directory_uri() . '/css/holzer.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('raleway', 'https://fonts.googleapis.com/css?family=Raleway:400,200,300,500');
    wp_enqueue_style('lato', 'http://fonts.googleapis.com/css?family=Lato:300,400');
    wp_enqueue_style('oswald', 'https://fonts.googleapis.com/css?family=Oswald:700,400');
    //js
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.6', true );
    wp_enqueue_script( 'holzer', get_template_directory_uri() . '/js/holzer.js', array('jquery'), '1.0.0', true );
}

add_action('wp_enqueue_scripts', 'holzer_load_scripts');
