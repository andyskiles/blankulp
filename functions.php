<?php
add_action( 'after_setup_theme', 'blankulp_setup' );

function blankulp_setup() {
	load_theme_textdomain( 'blankulp', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	global $content_width;
	if ( ! isset( $content_width ) ) $content_width = 640;
	register_nav_menus(
	array( 'main-menu' => __( 'Main Menu', 'blankulp' ) )
	);
}


add_action( 'wp_enqueue_scripts', 'load_style' );
function load_style() {
    wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css' );
}




add_action( 'wp_enqueue_scripts', 'load_scripts' );
function load_scripts() {
    wp_register_script(
        'libs',
        get_stylesheet_directory_uri() . '/site_assets/js/libs/jquery-1.11.1.min.js',
        false,
        '1.0',
        true
    );
    wp_register_script(
        'main',
        get_stylesheet_directory_uri() . '/site_assets/js/main.js',
        false,
        '1.0',
        true
    );

    wp_enqueue_script( 'libs' );
    wp_enqueue_script( 'main' );
}


add_filter( 'the_title', 'blankulp_title' );
function blankulp_title( $title ) {
	if ( $title == '' ) {
		return '&rarr;';
	} else {
		return $title;
	}
}

add_filter( 'wp_title', 'blankulp_filter_wp_title' );
function blankulp_filter_wp_title( $title ) {
	return $title . esc_attr( get_bloginfo( 'name' ) );
}


add_action( 'widgets_init', 'blankulp_widgets_init' );
function blankulp_widgets_init() {
	register_sidebar( array (
		'name' => __( 'Sidebar Widgets', 'blankulp' ),
		'id' => 'primary-widget-area',
		'before_widget' => '<div class="sidebar-block">',
		'after_widget' => "</div>",
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	register_sidebar( array (
		'name' => __( 'Footer Widgets', 'blankulp' ),
		'id' => 'footer-widget-area',
		'before_widget' => '<div class="footer-block">',
		'after_widget' => "</div>",
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
}





?>