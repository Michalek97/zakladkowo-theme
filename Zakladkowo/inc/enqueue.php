<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function zakladkowo_enqueue_assets() {

	$theme = wp_get_theme();

	wp_enqueue_style(
		'zakladkowo-style',
		get_stylesheet_uri(),
		array(),
		$theme->get( 'Version' )
	);

	wp_enqueue_style(
		'zakladkowo-base',
		get_template_directory_uri() . '/assets/css/base.css',
		array( 'zakladkowo-style' ),
		filemtime( get_template_directory() . '/assets/css/base.css' )
	);

	wp_enqueue_style(
		'zakladkowo-layout',
		get_template_directory_uri() . '/assets/css/layout.css',
		array( 'zakladkowo-base' ),
		filemtime( get_template_directory() . '/assets/css/layout.css' )
	);

	wp_enqueue_style(
		'zakladkowo-components',
		get_template_directory_uri() . '/assets/css/components.css',
		array( 'zakladkowo-layout' ),
		filemtime( get_template_directory() . '/assets/css/components.css' )
	);

	wp_enqueue_style(
		'zakladkowo-woocommerce',
		get_template_directory_uri() . '/assets/css/woocommerce.css',
		array( 'zakladkowo-home' ),
		filemtime( get_template_directory() . '/assets/css/woocommerce.css' )
	);

	wp_enqueue_script(
		'zakladkowo-main',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		filemtime( get_template_directory() . '/assets/js/main.js' ),
		true
	);

}

add_action( 'wp_enqueue_scripts', 'zakladkowo_enqueue_assets' );