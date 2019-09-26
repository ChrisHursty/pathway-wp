<?php
if ( ! function_exists( 'pathway_wp_setup' ) ) :

function pathway_wp_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 */
	load_theme_textdomain( 'pathway_wp', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 */
	add_theme_support( 'title-tag' );
	
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );

	// Add menus.
	register_nav_menus( array(
		'primary'   => __( 'Primary Menu', 'pathway_wp' ),
		'social'    => __( 'Social Links Menu', 'pathway_wp' ),
		'hero_menu' => __( 'Hero Menu', 'pathway_wp' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );

	/*
	 * Enable support for Page excerpts.
	 */
	 add_post_type_support( 'page', 'excerpt' );
}
endif; // pathway_wp_setup

add_action( 'after_setup_theme', 'pathway_wp_setup' );


if ( ! function_exists( 'pathway_wp_init' ) ) :

function pathway_wp_init() {

	
	// Use categories and tags with attachments
	register_taxonomy_for_object_type( 'category', 'attachment' );
	register_taxonomy_for_object_type( 'post_tag', 'attachment' );

}
endif; // pathway_wp_setup

add_action( 'init', 'pathway_wp_init' );


if ( ! function_exists( 'pathway_wp_custom_image_sizes_names' ) ) :

function pathway_wp_custom_image_sizes_names( $sizes ) {

	/*
	 * Add names of custom image sizes.
	 */
	/* This code will be replaced by returning names of custom image sizes. */
	return $sizes;
}
add_action( 'image_size_names_choose', 'pathway_wp_custom_image_sizes_names' );
endif;// pathway_wp_custom_image_sizes_names



if ( ! function_exists( 'pathway_wp_widgets_init' ) ) :

function pathway_wp_widgets_init() {

	/*
	 * Register widget areas.
	 */

	register_sidebar( array(
		'name'          => __( 'Sidebar', 'pathway_wp' ),
		'id'            => 'sidebar_area',
		'description'   => 'Widgetized Sidebar Area',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>'
	) );

	register_sidebar( array(
		'name'          => __( 'Footer One', 'pathway_wp' ),
		'id'            => 'footer_one',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Two', 'pathway_wp' ),
		'id'            => 'footer_two',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Three', 'pathway_wp' ),
		'id'            => 'footer_three',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Four', 'pathway_wp' ),
		'id'            => 'footer_four',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	) );

}
add_action( 'widgets_init', 'pathway_wp_widgets_init' );
endif;// pathway_wp_widgets_init

if ( ! function_exists( 'pathway_wp_enqueue_scripts' ) ) :
	function pathway_wp_enqueue_scripts() {

	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/vendor/jquery/jquery.min.js', false, null, true);

	wp_deregister_script( 'bootstrapbundle' );
	wp_enqueue_script( 'bootstrapbundle', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js', false, null, true);

	wp_deregister_script( 'jqueryeasing' );
	wp_enqueue_script( 'jqueryeasing', get_template_directory_uri() . '/vendor/jquery-easing/jquery.easing.min.js', false, null, true);

	wp_deregister_script( 'jqbootstrapvalidation' );
	wp_enqueue_script( 'jqbootstrapvalidation', get_template_directory_uri() . '/js/jqBootstrapValidation.js', false, null, true);

	wp_deregister_script( 'contact_me' );
	wp_enqueue_script( 'contact_me', get_template_directory_uri() . '/js/contact_me.js', false, null, true);

	wp_deregister_script( 'scripts' );
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.min.js', false, null, true);

	wp_deregister_style( 'all' );
	wp_enqueue_style( 'all', get_template_directory_uri() . '/vendor/fontawesome-free/css/all.min.css', false, null, 'all');

	wp_deregister_style( 'style-1' );
	wp_enqueue_style( 'style-1', 'https://fonts.googleapis.com/css?family=Oswald:400,500&display=swap', false, null, 'all');

	wp_deregister_style( 'styles' );
	wp_enqueue_style( 'styles', get_template_directory_uri() . '/css/styles.min.css', false, null, 'all');

	wp_deregister_style( 'style' );
	wp_enqueue_style( 'style', get_bloginfo('stylesheet_url'), false, null, 'all');

	}
	add_action( 'wp_enqueue_scripts', 'pathway_wp_enqueue_scripts' );
endif;

function pwwp_sanitize($input) { 
	return $input; 
}

require_once "inc/wp_pg_helpers.php";
require_once "inc/bootstrap/wp_bootstrap4_navwalker.php";

?>