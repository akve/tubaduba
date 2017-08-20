<?php
/**
 * Sidebars configuration.
 *
 * @package Organica
 */

add_action( 'after_setup_theme', 'organica_register_sidebars', 5 );
function organica_register_sidebars() {

	organica_widget_area()->widgets_settings = apply_filters( 'tm_widget_area_default_settings', array(
		'sidebar' => array(
			'name'           => esc_html__( 'Sidebar', 'organica' ),
			'description'    => '',
			'before_widget'  => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'   => '</aside>',
			'before_title'   => '<h3 class="widget-title">',
			'after_title'    => '</h3>',
			'before_wrapper' => '<div id="%1$s" %2$s role="complementary">',
			'after_wrapper'  => '</div>',
			'is_global'      => true,
		),
		'full-width-header-area' => array(
			'name'           => esc_html__( 'Full width header area', 'organica' ),
			'description'    => '',
			'before_widget'  => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'   => '</aside>',
			'before_title'   => '<h3 class="widget-title">',
			'after_title'    => '</h3>',
			'before_wrapper' => '<div id="%1$s" class="%2$s">',
			'after_wrapper'  => '</div>',
			'is_global'      => false,
			'conditional'    => array( 'is_home', 'is_front_page' ),
		),
		'before-content-area' => array(
			'name'           => esc_html__( 'Before content widget area', 'organica' ),
			'description'    => '',
			'before_widget'  => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'   => '</aside>',
			'before_title'   => '<h3 class="widget-title">',
			'after_title'    => '</h3>',
			'before_wrapper' => '<div id="%1$s" class="%2$s">',
			'after_wrapper'  => '</div>',
			'is_global'      => false,
			'conditional'    => array( 'is_home', 'is_front_page' ),
		),
		'before-loop-area' => array(
			'name'           => esc_html__( 'Before loop widget area', 'organica' ),
			'description'    => '',
			'before_widget'  => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'   => '</aside>',
			'before_title'   => '<h3 class="widget-title">',
			'after_title'    => '</h3>',
			'before_wrapper' => '<section id="%1$s" class="%2$s">',
			'after_wrapper'  => '</section>',
			'is_global'      => false,
			'conditional'    => array( 'is_home', 'is_front_page' ),
		),
		'after-loop-area' => array(
			'name'           => esc_html__( 'After loop widget area', 'organica' ),
			'description'    => '',
			'before_widget'  => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'   => '</aside>',
			'before_title'   => '<h3 class="widget-title">',
			'after_title'    => '</h3>',
			'before_wrapper' => '<section id="%1$s" class="%2$s">',
			'after_wrapper'  => '</section>',
			'is_global'      => false,
			'conditional'    => array( 'is_home', 'is_front_page' ),
		),
		'after-content-area' => array(
			'name'           => esc_html__( 'After content widget area', 'organica' ),
			'description'    => '',
			'before_widget'  => '<aside id="%1$s" class="widget %2$s col-xs-12 col-md-4">',
			'after_widget'   => '</aside>',
			'before_title'   => '<h3 class="widget-title">',
			'after_title'    => '</h3>',
			'before_wrapper' => '<div id="%1$s" class="%2$s">',
			'after_wrapper'  => '</div>',
			'is_global'      => false,
			'conditional'    => array( 'is_home', 'is_front_page' ),
		),
		'after-content-full-width-area' => array(
			'name'           => esc_html__( 'After content full width widget area', 'organica' ),
			'description'    => '',
			'before_widget'  => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'   => '</aside>',
			'before_title'   => '<h3 class="widget-title">',
			'after_title'    => '</h3>',
			'before_wrapper' => '<section id="%1$s" class="%2$s invert"><div class="container">',
			'after_wrapper'  => '</div></section>',
			'is_global'      => false,
			'conditional'    => array( 'is_home', 'is_front_page' ),
		),
		'footer-area' => array(
			'name'           => esc_html__( 'Footer widget area', 'organica' ),
			'description'    => '',
			'before_widget'  => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'   => '</aside>',
			'before_title'   => '<h3 class="widget-title">',
			'after_title'    => '</h3>',
			'before_wrapper' => '<section id="%1$s" class="%2$s">',
			'after_wrapper'  => '</section>',
			'is_global'      => true,
		),
	) );
}
