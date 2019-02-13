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

/**
 * Loading global site styles
 */
function loadStyleSheets() {
    wp_register_style('materialize', get_template_directory_uri() . '/assets/css/materialize.min.css', [], false, 'all');
    wp_enqueue_style('materialize');
    wp_register_style('fullpage', get_template_directory_uri() . '/assets/css/fullpage.min.css', [], false, 'all');
    wp_enqueue_style('fullpage');
    wp_register_style('style', get_template_directory_uri() . '/style.css', [], '1.0.0', 'all');
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'loadStyleSheets');

/**
 * Loading global site scripts
 */
function enqueue_my_js_scripts() {
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js', [], '3.3.1', true );
    wp_enqueue_script( 'materialize', get_template_directory_uri() . '/assets/js/materialize.min.js',  [], '1.0.0', true );
    wp_enqueue_script( 'fullpage-scrolloverflow', get_template_directory_uri() . '/assets/js/scrolloverflow.min.js', [], '2.0.1', true );
    wp_enqueue_script( 'fullpage', get_template_directory_uri() . '/assets/js/fullpage.min.js', [], '3.0.4', true );
    wp_enqueue_script( 'tipikall-custom', get_template_directory_uri() . '/assets/js/tipikall-custom.js', [], '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_my_js_scripts' );

/**
 * Override on WP standard JQuery loading
 */
function replace_core_jquery_version() {
    wp_deregister_script( 'jquery' );
    // Change the URL if you want to load a local copy of jQuery from your own server.
    wp_register_script( 'jquery', "https://code.jquery.com/jquery-3.1.1.min.js", array(), '3.1.1' );
}
add_action( 'wp_enqueue_scripts', 'replace_core_jquery_version' );


/**
 * Getting images root folder URL for html src
 * @return string
 */
function getTemplateImgRoot() {
    return get_template_directory_uri() . '/assets/images';
}

/**
 * Register nav menus
 *
 * @links https://codex.wordpress.org/Function_Reference/register_nav_menus
 */
register_nav_menus( array(
    'top-nav' => "Top Menu",
    'footer-nav' => "Footer Menu",
    'social-nav' => "Social Menu",
) );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tipikall_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Blog Sidebar', 'tipikall' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'tipikall' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 1', 'tipikall' ),
        'id'            => 'sidebar-2',
        'description'   => __( 'Add widgets here to appear in your footer.', 'tipikall' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 2', 'tipikall' ),
        'id'            => 'sidebar-3',
        'description'   => __( 'Add widgets here to appear in your footer.', 'tipikall' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'tipikall_widgets_init' );
