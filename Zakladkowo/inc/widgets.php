<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function zakladkowo_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Sidebar', 'zakladkowo' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Główny sidebar.', 'zakladkowo' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);

}

add_action( 'widgets_init', 'zakladkowo_widgets_init' );