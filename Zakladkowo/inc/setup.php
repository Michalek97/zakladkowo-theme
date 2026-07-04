<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function zakladkowo_setup() {

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'custom-logo', array(
		'height'      => 60,
		'width'       => 240,
		'flex-height' => true,
		'flex-width'  => true,
	) );

	register_nav_menus( array(
		'primary' => __( 'Menu główne', 'zakladkowo' ),
	) );

}

add_action( 'after_setup_theme', 'zakladkowo_setup' );