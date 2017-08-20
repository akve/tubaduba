<?php
/**
 * Menus configuration.
 *
 * @package Organica
 */

add_action( 'after_setup_theme', 'organica_register_menus', 5 );
function organica_register_menus() {

	// This theme uses wp_nav_menu() in four locations.
	register_nav_menus( array(
		'top'    => esc_html__( 'Top', 'organica' ),
		'main'   => esc_html__( 'Main', 'organica' ),
		'footer' => esc_html__( 'Footer', 'organica' ),
		'social' => esc_html__( 'Social', 'organica' ),
	) );
}
