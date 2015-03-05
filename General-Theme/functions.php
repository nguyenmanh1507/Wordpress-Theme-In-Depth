<?php 

// enable theme support
function generaltheme_setup() {

	// enable language translation
	load_theme_textdomain( 'generaltheme', get_template_directory() . '/languages' );

	// enable featured images
	add_theme_support( 'post-thumbnails' );

	// enable custom headers
	add_theme_support( 'custom-header' );

	// enable custom backgrounds
	add_theme_support( 'custom-background' );

	// enable three nav menus
	register_nav_menus( array (
			'header'    => __( 'Header menu' ),
			'sidebar'   => __( 'Sidebar menu' ),
			'footer'    => __( 'Footer menu' )
		) );	 

	// enable custom post formats
	add_theme_support( 'post-formats', array (
			'aside',
			'image',
			'video',
			'audio',
			'quote',
			'link',
			'gallery'
		) );	

}
add_action( 'after_theme_setup', 'generaltheme_setup' );

// enable widget
function generaltheme_widgets_init() {

	register_sidebar( array (
			'name'          => __( 'Header Widgets' ),
			'id'            => 'header',
			'description'   => __( 'Header Widget Area' ),
			'before_widget' => '<div class="widget %2$s">',
			'after_widget'  => '</div>'
		) );
	register_sidebar( array (
			'name'          => __( 'Sidebar Widgets' ),
			'id'            => 'sidebar',
			'description'   => __( 'Sidebar Widget Area' ),
			'before_widget' => '<div class="widget %2$s">',
			'after_widget'  => '</div>'
		) );
	register_sidebar( array (
			'name'          => __( 'Footer Widgets' ),
			'id'            => 'footer',
			'description'   => __( 'Footer Widget Area' ),
			'before_widget' => '<div class="widget %2$s">',
			'after_widget'  => '</div>'
		) );

}
add_action( 'widgets_init', 'generaltheme_widgets_init' );

// enqueue script and style
function generaltheme_scripts_styles() {

	// conditionally load script for threaded comments
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// load style.css
	wp_enqueue_style( 'generaltheme', get_stylesheet_uri(), array(), null );

}
add_action( 'wp_enqueue_scripts', 'generaltheme_scripts_styles' );