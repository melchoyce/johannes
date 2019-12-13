<?php

if ( ! function_exists( 'johannes_theme_support' ) ) :
    function johannes_theme_support()  {

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Set content-width
		global $content_width;
		if ( ! isset( $content_width ) ) {
			$content_width = 660;
		}

		// Post thumbnails
		add_theme_support( 'post-thumbnails' );

		// Set post thumbnail size.
		set_post_thumbnail_size( 1200, 9999 );

		// Title tag
		add_theme_support( 'title-tag' );

		// HTML5 semantic markup
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

		// Alignwide and alignfull classes in the block editor
		add_theme_support( 'align-wide' );


    }
    add_action( 'after_setup_theme', 'johannes_theme_support' );
endif;

/**
 * Register and Enqueue Styles.
 */
function johannes_register_styles() {

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'johannes-style', get_stylesheet_uri(), array(), $theme_version );

}

add_action( 'wp_enqueue_scripts', 'johannes_register_styles' );


/**
 * Block Editor Settings.
 * Add custom colors to the block editor.
 */

function johannes_block_editor_settings() {

	// Editor Color Palette
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => __( 'Blue', 'johannes' ),
			'slug'  => 'blue',
			'color'	=> '#59BACC',
		),
		array(
			'name'  => __( 'Green', 'johannes' ),
			'slug'  => 'green',
			'color' => '#58AD69',
		),
		array(
			'name'  => __( 'Orange', 'johannes' ),
			'slug'  => 'orange',
			'color' => '#FFBC49',
		),
		array(
			'name'	=> __( 'Red', 'johannes' ),
			'slug'	=> 'red',
			'color'	=> '#E2574C',
		),
	) );
}
add_action( 'after_setup_theme', 'johannes_block_editor_settings' );