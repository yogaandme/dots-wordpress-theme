<?php

add_action( 'wp_enqueue_scripts', 'load_css' );

function load_css() {
	wp_enqueue_style( 'dots_stylesheet', get_stylesheet_uri() );
}

if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 600, 600, true ); // default Featured Image dimensions (cropped)

    // additional image sizes
    // delete the next line if you do not need additional image sizes
    add_image_size( 'category-thumb', 300, 9999 ); // 300 pixels wide (and unlimited height)
 }

// This theme uses wp_nav_menu() in two locations.  
register_nav_menus( array(  
  'primary' => __( 'Primary Navigation', 'dots' ),  
  'secondary' => __('Secondary Navigation', 'dots')  
) );

?>
