<?php function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );	
	wp_enqueue_style( 'bootstrap-style', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/css/custom.css' );
	wp_enqueue_style( 'media-style', get_stylesheet_directory_uri() . '/css/media-query.css' );
	
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . '/js/jquery.js', array( 'jquery' ), $theme_version, true );
wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), $theme_version, true );
wp_enqueue_script( 'customnew', get_stylesheet_directory_uri() . '/js/customnew.js', array( 'jquery' ), $theme_version, true );