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
    'zakladkowo-topbar',
    get_template_directory_uri() . '/assets/css/components/topbar.css',
    array( 'zakladkowo-layout' ),
    filemtime( get_template_directory() . '/assets/css/components/topbar.css' )
);

wp_enqueue_style(
    'zakladkowo-header',
    get_template_directory_uri() . '/assets/css/components/header.css',
    array( 'zakladkowo-topbar' ),
    filemtime( get_template_directory() . '/assets/css/components/header.css' )
);

wp_enqueue_style(
    'zakladkowo-navigation',
    get_template_directory_uri() . '/assets/css/components/navigation.css',
    array( 'zakladkowo-header' ),
    filemtime( get_template_directory() . '/assets/css/components/navigation.css' )
);

wp_enqueue_style(
    'zakladkowo-buttons',
    get_template_directory_uri() . '/assets/css/components/buttons.css',
    array( 'zakladkowo-navigation' ),
    filemtime( get_template_directory() . '/assets/css/components/buttons.css' )
);

wp_enqueue_style(
    'zakladkowo-cards',
    get_template_directory_uri() . '/assets/css/components/cards.css',
    array( 'zakladkowo-buttons' ),
    filemtime( get_template_directory() . '/assets/css/components/cards.css' )
);

wp_enqueue_style(
    'zakladkowo-forms',
    get_template_directory_uri() . '/assets/css/components/forms.css',
    array( 'zakladkowo-cards' ),
    filemtime( get_template_directory() . '/assets/css/components/forms.css' )
);

wp_enqueue_style(
    'zakladkowo-footer',
    get_template_directory_uri() . '/assets/css/components/footer.css',
    array( 'zakladkowo-forms' ),
    filemtime( get_template_directory() . '/assets/css/components/footer.css' )
);

	wp_enqueue_style(
		'zakladkowo-woocommerce',
		get_template_directory_uri() . '/assets/css/woocommerce.css',
		array( 'zakladkowo-components' ),
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