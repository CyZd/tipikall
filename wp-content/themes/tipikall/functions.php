<?php
/**
 * Tipikall theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * Created by PhpStorm.
 * User: Chrisentem
 * Date: 4/2/2019
 *
 * Tipikall only works in WordPress 4.7 or later.
 */

function loadStyleSheets() {
    wp_register_style('materialize', get_template_directory_uri() . '/assets/css/materialize.min.css', [], false, 'all');
    wp_enqueue_style('materialize');
    wp_register_style('fullpage', get_template_directory_uri() . '/assets/css/fullpage.min.css', [], false, 'all');
    wp_enqueue_style('fullpage');
    wp_register_style('style', get_template_directory_uri() . '/style.css', [], '1.0', 'all');
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'loadStyleSheets');


function enqueue_my_js_scripts() {
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js', [], '3.3.1', true );
    wp_enqueue_script( 'materialize', get_template_directory_uri() . '/assets/js/materialize.min.js',  [], '1.0.0', true );
    wp_enqueue_script( 'fullpage', get_template_directory_uri() . '/assets/js/fullpage.min.js', [], '3.0.4', true );
    wp_enqueue_script( 'tipikall-custom', get_template_directory_uri() . '/assets/js/tipikall-custom.js', [], '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_my_js_scripts' );


function replace_core_jquery_version() {
    wp_deregister_script( 'jquery' );
    // Change the URL if you want to load a local copy of jQuery from your own server.
    wp_register_script( 'jquery', "https://code.jquery.com/jquery-3.1.1.min.js", array(), '3.1.1' );
}
add_action( 'wp_enqueue_scripts', 'replace_core_jquery_version' );