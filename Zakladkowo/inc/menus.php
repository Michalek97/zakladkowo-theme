<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function zakladkowo_register_menus() {

	register_nav_menus(
		array(
			'primary' => __( 'Menu główne', 'zakladkowo' ),
			'footer'  => __( 'Menu stopki', 'zakladkowo' ),
		)
	);

}

add_action( 'after_setup_theme', 'zakladkowo_register_menus' );