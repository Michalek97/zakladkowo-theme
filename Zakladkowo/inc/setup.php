<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function zakladkowo_setup() {

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );

}

add_action( 'after_setup_theme', 'zakladkowo_setup' );