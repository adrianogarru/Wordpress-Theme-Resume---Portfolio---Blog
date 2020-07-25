<?php

//Navbar function from bootstrap - Wordpress//

require_once get_template_directory() . '/assets/class-wp-bootstrap-navwalker.php';

register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );

// Image support for post thumbnails

add_theme_support('post-thumbnails');

//Excerpt Lenght Control - preview words of post//

function custom_excerpt_length( $length ) {
    return 100;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

//Function Image Theme Support
  
function wbp_theme_setup(){
	add_theme_support('post-thump');
}

// Theme support header image

$args = array(
    'flex-width'    => false,
    'width'         => 210,
    'flex-height'   => false,
    'height'        => 210,
    'default-image' => get_template_directory_uri() . '/images/header.jpg',
);
add_theme_support( 'custom-header', $args );

//Widget Sidebar right

function wpb_init_widgets($id){
	register_sidebar(array(
		'name' => 'Sidebar',
		'id'   => 'sidebar1',
		'before_widget' => '<div class="col-md-12 customclass-sidebar-right"><hr>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="customclass-sidebar-right-h3">',
		'after_title'   => '</h3>'
	));
}

add_action('widgets_init', 'wpb_init_widgets');

//Widget Social Links

function wpb_init_widgets_social($id){
	register_sidebar(array(
		'name' => 'Social Links',
		'id'   => 'social-links',
		'before_widget' => '<div class="social-links">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	));
}

add_action('widgets_init', 'wpb_init_widgets_social');

//Widget Footer

function wpb_init_widgets_footer($id){
	register_sidebar(array(
		'name' => 'Footer',
		'id'   => 'footer-widget',
		'before_widget' => '<div class="footer-widget col-md-3"><hr>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	));
}

add_action('widgets_init', 'wpb_init_widgets_footer');

?>