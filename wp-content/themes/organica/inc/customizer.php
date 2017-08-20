<?php
/**
 * Theme Customizer.
 *
 * @package Organica
 */

/**
 * Retrieve a holder for Customizer options.
 *
 * @since  1.0.0
 * @return array
 */
function organica_get_customizer_options() {
	/**
	 * Filter a holder for Customizer options (for theme/plugin developer customization).
	 *
	 * @since 1.0.0
	 */
	return apply_filters( 'organica_get_customizer_options', array(
		'prefix'     => 'organica',
		'capability' => 'edit_theme_options',
		'type'       => 'theme_mod',
		'options'    => array(

			/** 'Site Indentity' section */
			'show_tagline'                  => array(
				'title'    => esc_html__( 'Show tagline after logo', 'organica' ),
				'section'  => 'title_tagline',
				'priority' => 60,
				'default'  => false,
				'field'    => 'checkbox',
				'type'     => 'control',
			),
			'totop_visibility'              => array(
				'title'    => esc_html__( 'Enable topTop button', 'organica' ),
				'section'  => 'title_tagline',
				'priority' => 61,
				'default'  => true,
				'field'    => 'checkbox',
				'type'     => 'control',
			),
			'page_preloader'                => array(
				'title'    => esc_html__( 'Show preloader when open a page', 'organica' ),
				'section'  => 'title_tagline',
				'priority' => 62,
				'default'  => true,
				'field'    => 'checkbox',
				'type'     => 'control',
			),
			'general_settings'              => array(
				'title'    => esc_html__( 'General Site settings', 'organica' ),
				'priority' => 40,
				'type'     => 'panel',
			),
			/** `Logo & Favicon` section */
			'logo_favicon'                  => array(
				'title'    => esc_html__( 'Logo &amp; Favicon', 'organica' ),
				'priority' => 25,
				'panel'    => 'general_settings',
				'type'     => 'section',
			),
			'header_logo_type'              => array(
				'title'   => esc_html__( 'Logo Type', 'organica' ),
				'section' => 'logo_favicon',
				'default' => 'image',
				'field'   => 'radio',
				'choices' => array(
					'image' => esc_html__( 'Image', 'organica' ),
					'text'  => esc_html__( 'Text', 'organica' ),
				),
				'type'    => 'control',
			),
			'header_logo_url'               => array(
				'title'           => esc_html__( 'Logo Upload', 'organica' ),
				'description'     => esc_html__( 'Upload logo image', 'organica' ),
				'section'         => 'logo_favicon',
				'default'         => get_stylesheet_directory_uri() . '/assets/images/logo.png',
				'field'           => 'image',
				'type'            => 'control',
				'active_callback' => 'organica_is_header_logo_image',
			),
			'retina_header_logo_url'        => array(
				'title'           => esc_html__( 'Retina Logo Upload', 'organica' ),
				'description'     => esc_html__( 'Upload logo for retina-ready devices', 'organica' ),
				'section'         => 'logo_favicon',
				'default'         => get_stylesheet_directory_uri() . '',
				'field'           => 'image',
				'type'            => 'control',
				'active_callback' => 'organica_is_header_logo_image',
			),
			'header_logo_font_family'       => array(
				'title'           => esc_html__( 'Font Family', 'organica' ),
				'section'         => 'logo_favicon',
				'default'         => 'Montserrat',
				'field'           => 'fonts',
				'type'            => 'control',
				'active_callback' => 'organica_is_header_logo_text',
			),
			'header_logo_font_style'        => array(
				'title'           => esc_html__( 'Font Style', 'organica' ),
				'section'         => 'logo_favicon',
				'default'         => 'normal',
				'field'           => 'select',
				'choices'         => organica_get_font_styles(),
				'type'            => 'control',
				'active_callback' => 'organica_is_header_logo_text',
			),
			'header_logo_font_weight'       => array(
				'title'           => esc_html__( 'Font Weight', 'organica' ),
				'section'         => 'logo_favicon',
				'default'         => '400',
				'field'           => 'select',
				'choices'         => organica_get_font_weight(),
				'type'            => 'control',
				'active_callback' => 'organica_is_header_logo_text',
			),
			'header_logo_font_size'         => array(
				'title'           => esc_html__( 'Font Size, px', 'organica' ),
				'section'         => 'logo_favicon',
				'default'         => '60',
				'field'           => 'number',
				'input_attrs'     => array(
					'min'  => 10,
					'max'  => 60,
					'step' => 1,
				),
				'type'            => 'control',
				'active_callback' => 'organica_is_header_logo_text',
			),
			'header_logo_character_set'     => array(
				'title'           => esc_html__( 'Character Set', 'organica' ),
				'section'         => 'logo_favicon',
				'default'         => 'latin',
				'field'           => 'select',
				'choices'         => organica_get_character_sets(),
				'type'            => 'control',
				'active_callback' => 'organica_is_header_logo_text',
			),
			/** `Breadcrumbs` section */
			'breadcrumbs'                   => array(
				'title'    => esc_html__( 'Breadcrumbs', 'organica' ),
				'priority' => 30,
				'type'     => 'section',
				'panel'    => 'general_settings',
			),
			'breadcrumbs_path_type'         => array(
				'title'   => esc_html__( 'Show full/minified breadcrumbs path', 'organica' ),
				'section' => 'breadcrumbs',
				'default' => 'minified',
				'field'   => 'select',
				'choices' => array(
					'full'     => esc_html__( 'Full', 'organica' ),
					'minified' => esc_html__( 'Minified', 'organica' ),
				),
				'type'    => 'control',
			),
			'breadcrumbs_page_title'        => array(
				'title'   => esc_html__( 'Enable page title in breadcrumbs area', 'organica' ),
				'section' => 'breadcrumbs',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'breadcrumbs_visibillity'       => array(
				'title'   => esc_html__( 'Enable Breadcrumbs', 'organica' ),
				'section' => 'breadcrumbs',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'breadcrumbs_front_visibillity' => array(
				'title'   => esc_html__( 'Enable Breadcrumbs on front page', 'organica' ),
				'section' => 'breadcrumbs',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			/** `Color Scheme` panel */
			'color_scheme'                  => array(
				'title'       => esc_html__( 'Color Scheme', 'organica' ),
				'description' => esc_html__( 'Configure Color Scheme', 'organica' ),
				'priority'    => 40,
				'type'        => 'panel',
			),
			/** `Regular scheme` section */
			'regular_scheme'                => array(
				'title'    => esc_html__( 'Regular scheme', 'organica' ),
				'priority' => 1,
				'panel'    => 'color_scheme',
				'type'     => 'section',
			),
			'regular_accent_color_1'        => array(
				'title'   => esc_html__( 'Accent color (1)', 'organica' ),
				'section' => 'regular_scheme',
				'default' => '#8dc63f',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_accent_color_2'        => array(
				'title'   => esc_html__( 'Accent color (2)', 'organica' ),
				'section' => 'regular_scheme',
				'default' => '#999999',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_accent_color_3'        => array(
				'title'   => esc_html__( 'Accent color (3)', 'organica' ),
				'section' => 'regular_scheme',
				'default' => '#141d23',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_accent_color_4'        => array(
				'title'   => esc_html__( 'Accent color (4)', 'organica' ),
				'section' => 'regular_scheme',
				'default' => '#ea375c',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_accent_color_5'        => array(
				'title'   => esc_html__( 'Accent color (5)', 'organica' ),
				'section' => 'regular_scheme',
				'default' => '#07b8c2',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_accent_color_6'        => array(
				'title'   => esc_html__( 'Accent color (6)', 'organica' ),
				'section' => 'regular_scheme',
				'default' => '#889b53',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_text_color'            => array(
				'title'   => esc_html__( 'Text color', 'organica' ),
				'section' => 'regular_scheme',
				'default' => '#2f2f2f',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_link_color'            => array(
				'title'   => esc_html__( 'Link color', 'organica' ),
				'section' => 'regular_scheme',
				'default' => '#ea375c',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_link_hover_color'      => array(
				'title'   => esc_html__( 'Link hover color', 'organica' ),
				'section' => 'regular_scheme',
				'default' => '#141d23',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_h1_color'              => array(
				'title'   => esc_html__( 'H1 color', 'organica' ),
				'section' => 'regular_scheme',
				'default' => '#141d23',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_h2_color'              => array(
				'title'   => esc_html__( 'H2 color', 'organica' ),
				'section' => 'regular_scheme',
				'default' => '#141d23',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_h3_color'              => array(
				'title'   => esc_html__( 'H3 color', 'organica' ),
				'section' => 'regular_scheme',
				'default' => '#141d23',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_h4_color'              => array(
				'title'   => esc_html__( 'H4 color', 'organica' ),
				'section' => 'regular_scheme',
				'default' => '#141d23',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_h5_color'              => array(
				'title'   => esc_html__( 'H5 color', 'organica' ),
				'section' => 'regular_scheme',
				'default' => '#ea375c',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'regular_h6_color'              => array(
				'title'   => esc_html__( 'H6 color', 'organica' ),
				'section' => 'regular_scheme',
				'default' => '#141d23',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			/** `Invert scheme` section */
			'invert_scheme'                 => array(
				'title'    => esc_html__( 'Invert scheme', 'organica' ),
				'priority' => 1,
				'panel'    => 'color_scheme',
				'type'     => 'section',
			),
			'invert_accent_color_1'         => array(
				'title'   => esc_html__( 'Accent color (1)', 'organica' ),
				'section' => 'invert_scheme',
				'default' => '#ffffff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_accent_color_2'         => array(
				'title'   => esc_html__( 'Accent color (2)', 'organica' ),
				'section' => 'invert_scheme',
				'default' => '#141414',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_accent_color_3'         => array(
				'title'   => esc_html__( 'Accent color (3)', 'organica' ),
				'section' => 'invert_scheme',
				'default' => '#d0d6bf',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_text_color'             => array(
				'title'   => esc_html__( 'Text color', 'organica' ),
				'section' => 'invert_scheme',
				'default' => '#ffffff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_link_color'             => array(
				'title'   => esc_html__( 'Link color', 'organica' ),
				'section' => 'invert_scheme',
				'default' => '#ffffff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_link_hover_color'       => array(
				'title'   => esc_html__( 'Link hover color', 'organica' ),
				'section' => 'invert_scheme',
				'default' => '#303043',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_h1_color'               => array(
				'title'   => esc_html__( 'H1 color', 'organica' ),
				'section' => 'invert_scheme',
				'default' => '#ffffff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_h2_color'               => array(
				'title'   => esc_html__( 'H2 color', 'organica' ),
				'section' => 'invert_scheme',
				'default' => '#ffffff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_h3_color'               => array(
				'title'   => esc_html__( 'H3 color', 'organica' ),
				'section' => 'invert_scheme',
				'default' => '#ffffff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_h4_color'               => array(
				'title'   => esc_html__( 'H4 color', 'organica' ),
				'section' => 'invert_scheme',
				'default' => '#ffffff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_h5_color'               => array(
				'title'   => esc_html__( 'H5 color', 'organica' ),
				'section' => 'invert_scheme',
				'default' => '#ffffff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_h6_color'               => array(
				'title'   => esc_html__( 'H6 color', 'organica' ),
				'section' => 'invert_scheme',
				'default' => '#ffffff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			/** `Badge scheme` section */
			'badge_scheme'                 => array(
				'title'    => esc_html__( 'Badge scheme', 'organica' ),
				'priority' => 1,
				'panel'    => 'color_scheme',
				'type'     => 'section',
			),
			'badge_color_1'         => array(
				'title'   => esc_html__( 'New color', 'organica' ),
				'section' => 'badge_scheme',
				'default' => '#8dc63f',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'badge_color_2'         => array(
				'title'   => esc_html__( 'Sale color', 'organica' ),
				'section' => 'badge_scheme',
				'default' => '#ea375c',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'badge_color_3'         => array(
				'title'   => esc_html__( 'Featured color', 'organica' ),
				'section' => 'badge_scheme',
				'default' => '#f8a91d',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			/** `Typography Settings` panel */
			'typography'                    => array(
				'title'       => esc_html__( 'Typography', 'organica' ),
				'description' => esc_html__( 'Configure typography settings', 'organica' ),
				'priority'    => 45,
				'type'        => 'panel',
			),
			/** `Body text` section */
			'body_typography'               => array(
				'title'    => esc_html__( 'Body text', 'organica' ),
				'priority' => 5,
				'panel'    => 'typography',
				'type'     => 'section',
			),
			'body_font_family'              => array(
				'title'   => esc_html__( 'Font Family', 'organica' ),
				'section' => 'body_typography',
				'default' => 'Lora',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'body_font_style'               => array(
				'title'   => esc_html__( 'Font Style', 'organica' ),
				'section' => 'body_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => organica_get_font_styles(),
				'type'    => 'control',
			),
			'body_font_weight'              => array(
				'title'   => esc_html__( 'Font Weight', 'organica' ),
				'section' => 'body_typography',
				'default' => '400',
				'field'   => 'select',
				'choices' => organica_get_font_weight(),
				'type'    => 'control',
			),
			'body_font_size'                => array(
				'title'       => esc_html__( 'Font Size, px', 'organica' ),
				'section'     => 'body_typography',
				'default'     => '18',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 6,
					'max'  => 50,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'body_line_height'              => array(
				'title'       => esc_html__( 'Line Height', 'organica' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'organica' ),
				'section'     => 'body_typography',
				'default'     => '1.555555555555556',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type'        => 'control',
			),
			'body_letter_spacing'           => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'organica' ),
				'section'     => 'body_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => - 10,
					'max'  => 10,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'body_character_set'            => array(
				'title'   => esc_html__( 'Character Set', 'organica' ),
				'section' => 'body_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => organica_get_character_sets(),
				'type'    => 'control',
			),
			'body_text_align'               => array(
				'title'   => esc_html__( 'Text Align', 'organica' ),
				'section' => 'body_typography',
				'default' => 'left',
				'field'   => 'select',
				'choices' => organica_get_text_aligns(),
				'type'    => 'control',
			),
			/** `H1 Heading` section */
			/** `H1 Heading` section */
			'h1_typography'                 => array(
				'title'       => esc_html__( 'H1 Heading', 'organica' ),
				'description' => esc_html__( 'Some description for the options in the H1 Heading', 'organica' ),
				'priority'    => 10,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'h1_font_family'                => array(
				'title'   => esc_html__( 'Font Family', 'organica' ),
				'section' => 'h1_typography',
				'default' => 'Montserrat',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h1_font_style'                 => array(
				'title'   => esc_html__( 'Font Style', 'organica' ),
				'section' => 'h1_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => organica_get_font_styles(),
				'type'    => 'control',
			),
			'h1_font_weight'                => array(
				'title'   => esc_html__( 'Font Weight', 'organica' ),
				'section' => 'h1_typography',
				'default' => '400',
				'field'   => 'select',
				'choices' => organica_get_font_weight(),
				'type'    => 'control',
			),
			'h1_font_size'                  => array(
				'title'       => esc_html__( 'Font Size, px', 'organica' ),
				'section'     => 'h1_typography',
				'default'     => '35',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'h1_line_height'                => array(
				'title'       => esc_html__( 'Line Height', 'organica' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'organica' ),
				'section'     => 'h1_typography',
				'default'     => '1.285714285714286',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type'        => 'control',
			),
			'h1_letter_spacing'             => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'organica' ),
				'section'     => 'h1_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => - 10,
					'max'  => 10,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'h1_character_set'              => array(
				'title'   => esc_html__( 'Character Set', 'organica' ),
				'section' => 'h1_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => organica_get_character_sets(),
				'type'    => 'control',
			),
			'h1_text_align'                 => array(
				'title'   => esc_html__( 'Text Align', 'organica' ),
				'section' => 'h1_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => organica_get_text_aligns(),
				'type'    => 'control',
			),
			/** `H2 Heading` section */
			'h2_typography'                 => array(
				'title'       => esc_html__( 'H2 Heading', 'organica' ),
				'description' => esc_html__( 'Some description for the options in the H2 Heading', 'organica' ),
				'priority'    => 15,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'h2_font_family'                => array(
				'title'   => esc_html__( 'Font Family', 'organica' ),
				'section' => 'h2_typography',
				'default' => 'Montserrat',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h2_font_style'                 => array(
				'title'   => esc_html__( 'Font Style', 'organica' ),
				'section' => 'h2_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => organica_get_font_styles(),
				'type'    => 'control',
			),
			'h2_font_weight'                => array(
				'title'   => esc_html__( 'Font Weight', 'organica' ),
				'section' => 'h2_typography',
				'default' => '700',
				'field'   => 'select',
				'choices' => organica_get_font_weight(),
				'type'    => 'control',
			),
			'h2_font_size'                  => array(
				'title'       => esc_html__( 'Font Size, px', 'organica' ),
				'section'     => 'h2_typography',
				'default'     => '30',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'h2_line_height'                => array(
				'title'       => esc_html__( 'Line Height', 'organica' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'organica' ),
				'section'     => 'h2_typography',
				'default'     => '1.133333333333333',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type'        => 'control',
			),
			'h2_letter_spacing'             => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'organica' ),
				'section'     => 'h2_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => - 10,
					'max'  => 10,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'h2_character_set'              => array(
				'title'   => esc_html__( 'Character Set', 'organica' ),
				'section' => 'h2_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => organica_get_character_sets(),
				'type'    => 'control',
			),
			'h2_text_align'                 => array(
				'title'   => esc_html__( 'Text Align', 'organica' ),
				'section' => 'h2_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => organica_get_text_aligns(),
				'type'    => 'control',
			),
			/** `H3 Heading` section */
			'h3_typography'                 => array(
				'title'       => esc_html__( 'H3 Heading', 'organica' ),
				'description' => esc_html__( 'Some description for the options in the H3 Heading', 'organica' ),
				'priority'    => 20,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'h3_font_family'                => array(
				'title'   => esc_html__( 'Font Family', 'organica' ),
				'section' => 'h3_typography',
				'default' => 'Montserrat',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h3_font_style'                 => array(
				'title'   => esc_html__( 'Font Style', 'organica' ),
				'section' => 'h3_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => organica_get_font_styles(),
				'type'    => 'control',
			),
			'h3_font_weight'                => array(
				'title'   => esc_html__( 'Font Weight', 'organica' ),
				'section' => 'h3_typography',
				'default' => '700',
				'field'   => 'select',
				'choices' => organica_get_font_weight(),
				'type'    => 'control',
			),
			'h3_font_size'                  => array(
				'title'       => esc_html__( 'Font Size, px', 'organica' ),
				'section'     => 'h3_typography',
				'default'     => '20',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'h3_line_height'                => array(
				'title'       => esc_html__( 'Line Height', 'organica' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'organica' ),
				'section'     => 'h3_typography',
				'default'     => '1.333333333333333',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type'        => 'control',
			),
			'h3_letter_spacing'             => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'organica' ),
				'section'     => 'h3_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => - 10,
					'max'  => 10,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'h3_character_set'              => array(
				'title'   => esc_html__( 'Character Set', 'organica' ),
				'section' => 'h3_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => organica_get_character_sets(),
				'type'    => 'control',
			),
			'h3_text_align'                 => array(
				'title'   => esc_html__( 'Text Align', 'organica' ),
				'section' => 'h3_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => organica_get_text_aligns(),
				'type'    => 'control',
			),
			/** `H4 Heading` section */
			'h4_typography'                 => array(
				'title'       => esc_html__( 'H4 Heading', 'organica' ),
				'description' => esc_html__( 'Some description for the options in the H4 Heading', 'organica' ),
				'priority'    => 25,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'h4_font_family'                => array(
				'title'   => esc_html__( 'Font Family', 'organica' ),
				'section' => 'h4_typography',
				'default' => 'Montserrat',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h4_font_style'                 => array(
				'title'   => esc_html__( 'Font Style', 'organica' ),
				'section' => 'h4_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => organica_get_font_styles(),
				'type'    => 'control',
			),
			'h4_font_weight'                => array(
				'title'   => esc_html__( 'Font Weight', 'organica' ),
				'section' => 'h4_typography',
				'default' => '700',
				'field'   => 'select',
				'choices' => organica_get_font_weight(),
				'type'    => 'control',
			),
			'h4_font_size'                  => array(
				'title'       => esc_html__( 'Font Size, px', 'organica' ),
				'section'     => 'h4_typography',
				'default'     => '20',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'h4_line_height'                => array(
				'title'       => esc_html__( 'Line Height', 'organica' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'organica' ),
				'section'     => 'h4_typography',
				'default'     => '1.5',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type'        => 'control',
			),
			'h4_letter_spacing'             => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'organica' ),
				'section'     => 'h4_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => - 10,
					'max'  => 10,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'h4_character_set'              => array(
				'title'   => esc_html__( 'Character Set', 'organica' ),
				'section' => 'h4_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => organica_get_character_sets(),
				'type'    => 'control',
			),
			'h4_text_align'                 => array(
				'title'   => esc_html__( 'Text Align', 'organica' ),
				'section' => 'h4_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => organica_get_text_aligns(),
				'type'    => 'control',
			),
			/** `H5 Heading` section */
			'h5_typography'                 => array(
				'title'       => esc_html__( 'H5 Heading', 'organica' ),
				'description' => esc_html__( 'Some description for the options in the H5 Heading', 'organica' ),
				'priority'    => 30,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'h5_font_family'                => array(
				'title'   => esc_html__( 'Font Family', 'organica' ),
				'section' => 'h5_typography',
				'default' => 'Lora',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h5_font_style'                 => array(
				'title'   => esc_html__( 'Font Style', 'organica' ),
				'section' => 'h5_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => organica_get_font_styles(),
				'type'    => 'control',
			),
			'h5_font_weight'                => array(
				'title'   => esc_html__( 'Font Weight', 'organica' ),
				'section' => 'h5_typography',
				'default' => '400',
				'field'   => 'select',
				'choices' => organica_get_font_weight(),
				'type'    => 'control',
			),
			'h5_font_size'                  => array(
				'title'       => esc_html__( 'Font Size, px', 'organica' ),
				'section'     => 'h5_typography',
				'default'     => '20',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'h5_line_height'                => array(
				'title'       => esc_html__( 'Line Height', 'organica' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'organica' ),
				'section'     => 'h5_typography',
				'default'     => '1.2',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type'        => 'control',
			),
			'h5_letter_spacing'             => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'organica' ),
				'section'     => 'h5_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => - 10,
					'max'  => 10,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'h5_character_set'              => array(
				'title'   => esc_html__( 'Character Set', 'organica' ),
				'section' => 'h5_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => organica_get_character_sets(),
				'type'    => 'control',
			),
			'h5_text_align'                 => array(
				'title'   => esc_html__( 'Text Align', 'organica' ),
				'section' => 'h5_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => organica_get_text_aligns(),
				'type'    => 'control',
			),
			/** `H6 Heading` section */
			'h6_typography'                 => array(
				'title'       => esc_html__( 'H6 Heading', 'organica' ),
				'description' => esc_html__( 'Some description for the options in the H6 Heading', 'organica' ),
				'priority'    => 35,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'h6_font_family'                => array(
				'title'   => esc_html__( 'Font Family', 'organica' ),
				'section' => 'h6_typography',
				'default' => 'Montserrat',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h6_font_style'                 => array(
				'title'   => esc_html__( 'Font Style', 'organica' ),
				'section' => 'h6_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => organica_get_font_styles(),
				'type'    => 'control',
			),
			'h6_font_weight'                => array(
				'title'   => esc_html__( 'Font Weight', 'organica' ),
				'section' => 'h6_typography',
				'default' => '700',
				'field'   => 'select',
				'choices' => organica_get_font_weight(),
				'type'    => 'control',
			),
			'h6_font_size'                  => array(
				'title'       => esc_html__( 'Font Size, px', 'organica' ),
				'section'     => 'h6_typography',
				'default'     => '14',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'h6_line_height'                => array(
				'title'       => esc_html__( 'Line Height', 'organica' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'organica' ),
				'section'     => 'h6_typography',
				'default'     => '1.714285714285714',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type'        => 'control',
			),
			'h6_letter_spacing'             => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'organica' ),
				'section'     => 'h6_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => - 10,
					'max'  => 10,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'h6_character_set'              => array(
				'title'   => esc_html__( 'Character Set', 'organica' ),
				'section' => 'h6_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => organica_get_character_sets(),
				'type'    => 'control',
			),
			'h6_text_align'                 => array(
				'title'   => esc_html__( 'Text Align', 'organica' ),
				'section' => 'h6_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => organica_get_text_aligns(),
				'type'    => 'control',
			),
			/** `Body text` section */
			'breadcrumbs_typography'        => array(
				'title'    => esc_html__( 'Breadcrumbs text', 'organica' ),
				'priority' => 45,
				'panel'    => 'typography',
				'type'     => 'section',
			),
			'breadcrumbs_font_family'       => array(
				'title'   => esc_html__( 'Font Family', 'organica' ),
				'section' => 'breadcrumbs_typography',
				'default' => 'Lora',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'breadcrumbs_font_style'        => array(
				'title'   => esc_html__( 'Font Style', 'organica' ),
				'section' => 'breadcrumbs_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => organica_get_font_styles(),
				'type'    => 'control',
			),
			'breadcrumbs_font_weight'       => array(
				'title'   => esc_html__( 'Font Weight', 'organica' ),
				'section' => 'breadcrumbs_typography',
				'default' => '400',
				'field'   => 'select',
				'choices' => organica_get_font_weight(),
				'type'    => 'control',
			),
			'breadcrumbs_font_size'         => array(
				'title'       => esc_html__( 'Font Size, px', 'organica' ),
				'section'     => 'breadcrumbs_typography',
				'default'     => '16',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 6,
					'max'  => 50,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'breadcrumbs_line_height'       => array(
				'title'       => esc_html__( 'Line Height', 'organica' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'organica' ),
				'section'     => 'breadcrumbs_typography',
				'default'     => '1.5',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type'        => 'control',
			),
			'breadcrumbs_letter_spacing'    => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'organica' ),
				'section'     => 'breadcrumbs_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => - 10,
					'max'  => 10,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'breadcrumbs_character_set'     => array(
				'title'   => esc_html__( 'Character Set', 'organica' ),
				'section' => 'breadcrumbs_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => organica_get_character_sets(),
				'type'    => 'control',
			),
			/** `Social links` section */
			'social_links'                  => array(
				'title'    => esc_html__( 'Social links', 'organica' ),
				'priority' => 50,
				'type'     => 'section',
				'panel'    => 'general_settings',
			),
			'header_social_links'           => array(
				'title'   => esc_html__( 'Show social links in header', 'organica' ),
				'section' => 'social_links',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'footer_social_links'           => array(
				'title'   => esc_html__( 'Show social links in footer', 'organica' ),
				'section' => 'social_links',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'blog_post_share_buttons'       => array(
				'title'   => esc_html__( 'Show social sharing to blog posts', 'organica' ),
				'section' => 'social_links',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_share_buttons'     => array(
				'title'   => esc_html__( 'Show social sharing to single blog post', 'organica' ),
				'section' => 'social_links',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			/** `Page Layout` section */
			'page_layout'                   => array(
				'title'    => esc_html__( 'Page Layout', 'organica' ),
				'priority' => 55,
				'type'     => 'section',
				'panel'    => 'general_settings',
			),
			'page_layout_type'              => array(
				'title'   => esc_html__( 'Type', 'organica' ),
				'section' => 'page_layout',
				'default' => 'boxed',
				'field'   => 'select',
				'choices' => array(
					'boxed'     => esc_html__( 'Boxed', 'organica' ),
					'fullwidth' => esc_html__( 'Fullwidth', 'organica' ),
				),
				'type'    => 'control',
			),
			'container_width'               => array(
				'title'       => esc_html__( 'Container width (px)', 'organica' ),
				'section'     => 'page_layout',
				'default'     => 1200,
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 960,
					'max'  => 1920,
					'step' => 1,
				),
				'type'        => 'control',
			),
			'sidebar_width'                 => array(
				'title'             => esc_html__( 'Sidebar width', 'organica' ),
				'section'           => 'page_layout',
				'default'           => '1/4',
				'field'             => 'select',
				'choices'           => array(
					'1/3' => '1/3',
					'1/4' => '1/4',
				),
				'sanitize_callback' => 'sanitize_text_field',
				'type'              => 'control',
			),
			/** `Header` panel */
			'header_options'                => array(
				'title'    => esc_html__( 'Header', 'organica' ),
				'priority' => 60,
				'type'     => 'panel',
			),
			/** `Header styles` section */
			'header_styles'                 => array(
				'title'    => esc_html__( 'Header Styles', 'organica' ),
				'priority' => 5,
				'panel'    => 'header_options',
				'type'     => 'section',
			),
			'header_bg_color'               => array(
				'title'   => esc_html__( 'Background Color', 'organica' ),
				'section' => 'header_styles',
				'field'   => 'hex_color',
				'default' => '#ffffff',
				'type'    => 'control',
			),
			'header_bg_image'               => array(
				'title'   => esc_html__( 'Background Image', 'organica' ),
				'section' => 'header_styles',
				'field'   => 'image',
				'type'    => 'control',
			),
			'header_bg_repeat'              => array(
				'title'   => esc_html__( 'Background Repeat', 'organica' ),
				'section' => 'header_styles',
				'default' => 'repeat',
				'field'   => 'select',
				'choices' => array(
					'no-repeat' => esc_html__( 'No Repeat', 'organica' ),
					'repeat'    => esc_html__( 'Tile', 'organica' ),
					'repeat-x'  => esc_html__( 'Tile Horizontally', 'organica' ),
					'repeat-y'  => esc_html__( 'Tile Vertically', 'organica' ),
				),
				'type'    => 'control',
			),
			'header_bg_position_x'          => array(
				'title'   => esc_html__( 'Background Position', 'organica' ),
				'section' => 'header_styles',
				'default' => 'center',
				'field'   => 'select',
				'choices' => array(
					'left'   => esc_html__( 'Left', 'organica' ),
					'center' => esc_html__( 'Center', 'organica' ),
					'right'  => esc_html__( 'Right', 'organica' ),
				),
				'type'    => 'control',
			),
			'header_bg_attachment'          => array(
				'title'   => esc_html__( 'Background Attachment', 'organica' ),
				'section' => 'header_styles',
				'default' => 'scroll',
				'field'   => 'select',
				'choices' => array(
					'scroll' => esc_html__( 'Scroll', 'organica' ),
					'fixed'  => esc_html__( 'Fixed', 'organica' ),
				),
				'type'    => 'control',
			),
			'header_layout_type'            => array(
				'title'   => esc_html__( 'Layout', 'organica' ),
				'section' => 'header_styles',
				'default' => 'centered',
				'field'   => 'select',
				'choices' => array(
					'minimal'  => esc_html__( 'Style 1', 'organica' ),
					'centered' => esc_html__( 'Style 2', 'organica' ),
					'default'  => esc_html__( 'Style 3', 'organica' ),
				),
				'type'    => 'control',
			),
			/** `Top Panel` section */
			'header_top_panel'              => array(
				'title'    => esc_html__( 'Top Panel', 'organica' ),
				'priority' => 10,
				'panel'    => 'header_options',
				'type'     => 'section',
			),
			'top_panel_text'                => array(
				'title'       => esc_html__( 'Disclaimer text', 'organica' ),
				'description' => esc_html__( 'Not support HTML formatting', 'organica' ),
				'section'     => 'header_top_panel',
				'default'     => organica_get_default_top_panel_text(),
				'field'       => 'textarea',
				'type'        => 'control',
			),
			'top_panel_link_enable'         => array(
				'title'   => esc_html__( 'Enable secondary text link', 'organica' ),
				'section' => 'header_top_panel',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'top_panel_link'                => array(
				'title'   => esc_html__( 'Secondary text link', 'organica' ),
				'section' => 'header_top_panel',
				'default' => organica_get_top_panel_link(),
				'field'   => 'textarea',
				'type'    => 'control',
			),
			'top_panel_icon_enable'         => array(
				'title'   => esc_html__( 'Enable icon secondary text', 'organica' ),
				'section' => 'header_top_panel',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'top_panel_icon'                => array(
				'title'           => esc_html__( 'Icon for secondary text ', 'organica' ),
				'section'         => 'header_top_panel',
				'field'           => 'iconpicker',
				'default'         => 'fa-phone',
				'icon_data'       => array(
					'icon_set'    => 'cherryTeamFontAwesome',
					'icon_css'    => ORGANICA_THEME_DIR . '/assets/css/font-awesome.min.css',
					'icon_base'   => 'fa',
					'icon_prefix' => 'fa-',
					'icons'       => organica_get_icons_set(),
				),
				'type'            => 'control',
			),
			'top_panel_search'              => array(
				'title'   => esc_html__( 'Enable search', 'organica' ),
				'section' => 'header_top_panel',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'top_currency_switcher'         => array(
				'title'   => esc_html__( 'Enable Currency Switcher', 'organica' ),
				'section' => 'header_top_panel',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'top_panel_bg'                  => array(
				'title'   => esc_html__( 'Background color', 'organica' ),
				'section' => 'header_top_panel',
				'default' => '#f7f7f7',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			/** `Main Menu` section */
			'header_main_menu'              => array(
				'title'    => esc_html__( 'Main Menu', 'organica' ),
				'priority' => 15,
				'panel'    => 'header_options',
				'type'     => 'section',
			),
			'header_menu_sticky'            => array(
				'title'   => esc_html__( 'Enable sticky menu', 'organica' ),
				'section' => 'header_main_menu',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'header_menu_attributes'        => array(
				'title'   => esc_html__( 'Enable title attributes', 'organica' ),
				'section' => 'header_main_menu',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			/** `Sidebar` section */
			'sidebar_settings'              => array(
				'title'    => esc_html__( 'Sidebar', 'organica' ),
				'priority' => 105,
				'type'     => 'section',
			),
			'sidebar_position'              => array(
				'title'   => esc_html__( 'Sidebar Position', 'organica' ),
				'section' => 'sidebar_settings',
				'default' => 'one-right-sidebar',
				'field'   => 'select',
				'choices' => array(
					'one-left-sidebar'  => esc_html__( 'Sidebar on left side', 'organica' ),
					'one-right-sidebar' => esc_html__( 'Sidebar on right side', 'organica' ),
					'fullwidth'         => esc_html__( 'No sidebars', 'organica' ),
				),
				'type'    => 'control',
			),
			/** `Footer` panel */
			'footer_options'                => array(
				'title'    => esc_html__( 'Footer', 'organica' ),
				'priority' => 110,
				'type'     => 'section',
			),
			'footer_logo_url'               => array(
				'title'   => esc_html__( 'Logo upload', 'organica' ),
				'section' => 'footer_options',
				'field'   => 'image',
				'default' => get_stylesheet_directory_uri() . '/assets/images/footer-logo.png',
				'type'    => 'control',
			),
			'footer_copyright'              => array(
				'title'   => esc_html__( 'Copyright text', 'organica' ),
				'section' => 'footer_options',
				'default' => organica_get_default_footer_copyright(),
				'field'   => 'textarea',
				'type'    => 'control',
			),
			'footer_text'                   => array(
				'title'           => esc_html__( 'Footer text', 'organica' ),
				'section'         => 'footer_options',
				'default'         => organica_get_default_footer_text(),
				'field'           => 'textarea',
				'type'            => 'control',
				'active_callback' => 'organica_is_footer_style_2',
			),
			'footer_widget_columns'         => array(
				'title'   => esc_html__( 'Widget Area Columns', 'organica' ),
				'section' => 'footer_options',
				'default' => '4',
				'field'   => 'select',
				'choices' => array(
					'1' => '1',
					'2' => '2',
					'3' => '3',
					'4' => '4',
				),
				'type'    => 'control',
			),
			'footer_layout_type'            => array(
				'title'   => esc_html__( 'Layout', 'organica' ),
				'section' => 'footer_options',
				'default' => 'minimal',
				'field'   => 'select',
				'choices' => array(
					'default'  => esc_html__( 'Style 1', 'organica' ),
					'centered' => esc_html__( 'Style 2', 'organica' ),
					'minimal'  => esc_html__( 'Style 3', 'organica' ),
				),
				'type'    => 'control',
			),
			'footer_widgets_bg'             => array(
				'title'   => esc_html__( 'Footer Widgets Area color', 'organica' ),
				'section' => 'footer_options',
				'default' => '#657253',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'footer_bg'                     => array(
				'title'   => esc_html__( 'Footer Background color', 'organica' ),
				'section' => 'footer_options',
				'default' => '#657253',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			/** `Blog Settings` panel */
			'blog_settings'                 => array(
				'title'    => esc_html__( 'Blog Settings', 'organica' ),
				'priority' => 115,
				'type'     => 'panel',
			),
			/** `Blog` section */
			'blog'                          => array(
				'title'           => esc_html__( 'Blog', 'organica' ),
				'panel'           => 'blog_settings',
				'priority'        => 10,
				'type'            => 'section',
				'active_callback' => 'is_home',
			),
			'blog_layout_type'              => array(
				'title'   => esc_html__( 'Layout', 'organica' ),
				'section' => 'blog',
				'default' => 'default',
				'field'   => 'select',
				'choices' => array(
					'default'        => esc_html__( 'Default', 'organica' ),
					'grid-2-cols'    => esc_html__( 'Grid (2 Columns)', 'organica' ),
					'grid-3-cols'    => esc_html__( 'Grid (3 Columns)', 'organica' ),
					'masonry-2-cols' => esc_html__( 'Masonry (2 Columns)', 'organica' ),
					'masonry-3-cols' => esc_html__( 'Masonry (3 Columns)', 'organica' ),
				),
				'type'    => 'control',
			),
			'blog_sticky_label'             => array(
				'title'       => esc_html__( 'Featured Post Label', 'organica' ),
				'description' => esc_html__( 'Label for sticky post.', 'organica' ),
				'section'     => 'blog',
				'default'     => 'icon:material:star',
				'field'       => 'text',
				'type'        => 'control',
			),
			'blog_posts_content'            => array(
				'title'   => esc_html__( 'Post content', 'organica' ),
				'section' => 'blog',
				'default' => 'excerpt',
				'field'   => 'select',
				'choices' => array(
					'excerpt' => esc_html__( 'Only excerpt', 'organica' ),
					'full'    => esc_html__( 'Full content', 'organica' ),
				),
				'type'    => 'control',
			),
			'blog_featured_image'           => array(
				'title'   => esc_html__( 'Featured image', 'organica' ),
				'section' => 'blog',
				'default' => 'fullwidth',
				'field'   => 'select',
				'choices' => array(
					'small'     => esc_html__( 'Small', 'organica' ),
					'fullwidth' => esc_html__( 'Fullwidth', 'organica' ),
				),
				'type'    => 'control',
			),
			'blog_read_more_text'           => array(
				'title'   => esc_html__( 'Read More button text', 'organica' ),
				'section' => 'blog',
				'default' => esc_html__( 'Read more', 'organica' ),
				'field'   => 'text',
				'type'    => 'control',
			),
			'blog_post_author'              => array(
				'title'   => esc_html__( 'Show post author', 'organica' ),
				'section' => 'blog',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'blog_post_publish_date'        => array(
				'title'   => esc_html__( 'Show publish date', 'organica' ),
				'section' => 'blog',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'blog_post_categories'          => array(
				'title'   => esc_html__( 'Show categories', 'organica' ),
				'section' => 'blog',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'blog_post_tags'                => array(
				'title'   => esc_html__( 'Show tags', 'organica' ),
				'section' => 'blog',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'blog_post_comments'            => array(
				'title'   => esc_html__( 'Show comments', 'organica' ),
				'section' => 'blog',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			/** `Post` section */
			'blog_post'                     => array(
				'title'           => esc_html__( 'Post', 'organica' ),
				'panel'           => 'blog_settings',
				'priority'        => 20,
				'type'            => 'section',
				'active_callback' => 'callback_single',
			),
			'single_post_author'            => array(
				'title'   => esc_html__( 'Show post author', 'organica' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_publish_date'      => array(
				'title'   => esc_html__( 'Show publish date', 'organica' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_categories'        => array(
				'title'   => esc_html__( 'Show categories', 'organica' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_tags'              => array(
				'title'   => esc_html__( 'Show tags', 'organica' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_comments'          => array(
				'title'   => esc_html__( 'Show comments', 'organica' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_author_block'           => array(
				'title'   => esc_html__( 'Enable the author block after each post', 'organica' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'mailchimp'                     => array(
				'title'       => esc_html__( 'MailChimp', 'organica' ),
				'description' => esc_html__( 'Setup MailChimp settings for subscribe widget', 'organica' ),
				'priority'    => 109,
				'type'        => 'section',
			),
			'mailchimp_api_key'             => array(
				'title'   => esc_html__( 'MailChimp API key', 'organica' ),
				'section' => 'mailchimp',
				'field'   => 'text',
				'type'    => 'control',
			),
			'mailchimp_list_id'             => array(
				'title'   => esc_html__( 'MailChimp list ID', 'organica' ),
				'section' => 'mailchimp',
				'field'   => 'text',
				'type'    => 'control',
			),
			'top_language_selector'         => array(
				'title'           => esc_html__( 'On/Off Language Selector', 'organica' ),
				'section'         => 'header_top_panel',
				'default'         => true,
				'field'           => 'checkbox',
				'type'            => 'control',
				'active_callback' => 'organica_has_wpml',
			),
			'woocommerce'                   => array(
				'title'           => esc_html__( 'Woocommerce', 'organica' ),
				'priority'        => 200,
				'type'            => 'section',
				'active_callback' => 'organica_has_woocommerce',
			),
			'single_product_slider_layout'  => array(
				'title'           => esc_html__( 'Single product slider layout', 'organica' ),
				'section'         => 'woocommerce',
				'default'         => 'horizontal',
				'field'           => 'radio',
				'choices'         => array(
					'vertical'   => esc_html__( 'Vertical', 'organica' ),
					'horizontal' => esc_html__( 'Horizontal', 'organica' ),
				),
				'type'            => 'control',
				'active_callback' => 'is_product',
			),
		),
	) );
}

/**
 * Return true if logo in header has image type. Otherwise - return false.
 *
 * @param  object $control
 *
 * @return bool
 */
function organica_is_header_logo_image( $control ) {

	if ( $control->manager->get_setting( 'header_logo_type' )->value() == 'image' ) {
		return true;
	}

	return false;
}

/**
 * Return true if logo in header has text type. Otherwise - return false.
 *
 * @param  object $control
 *
 * @return bool
 */
function organica_is_header_logo_text( $control ) {

	if ( $control->manager->get_setting( 'header_logo_type' )->value() == 'text' ) {
		return true;
	}

	return false;
}

// Move native `site_icon` control (based on WordPress core) in custom section.
add_action( 'customize_register', 'organica_customizer_change_core_controls', 20 );
function organica_customizer_change_core_controls( $wp_customize ) {
	$wp_customize->get_control( 'site_icon' )->section      = 'organica_logo_favicon';
	$wp_customize->get_control( 'background_color' )->label = esc_html__( 'Body Background Color', 'organica' );
}

////////////////////////////////////
// Typography utility function    //
////////////////////////////////////
function organica_get_font_styles() {
	return apply_filters( 'organica_get_font_styles', array(
		'normal'  => esc_html__( 'Normal', 'organica' ),
		'italic'  => esc_html__( 'Italic', 'organica' ),
		'oblique' => esc_html__( 'Oblique', 'organica' ),
		'inherit' => esc_html__( 'Inherit', 'organica' ),
	) );
}

function organica_get_character_sets() {
	return apply_filters( 'organica_get_character_sets', array(
		'latin'        => esc_html__( 'Latin', 'organica' ),
		'greek'        => esc_html__( 'Greek', 'organica' ),
		'greek-ext'    => esc_html__( 'Greek Extended', 'organica' ),
		'vietnamese'   => esc_html__( 'Vietnamese', 'organica' ),
		'cyrillic-ext' => esc_html__( 'Cyrillic Extended', 'organica' ),
		'latin-ext'    => esc_html__( 'Latin Extended', 'organica' ),
		'cyrillic'     => esc_html__( 'Cyrillic', 'organica' ),
	) );
}

function organica_get_text_aligns() {
	return apply_filters( 'organica_get_text_aligns', array(
		'inherit' => esc_html__( 'Inherit', 'organica' ),
		'center'  => esc_html__( 'Center', 'organica' ),
		'justify' => esc_html__( 'Justify', 'organica' ),
		'left'    => esc_html__( 'Left', 'organica' ),
		'right'   => esc_html__( 'Right', 'organica' ),
	) );
}

function organica_get_font_weight() {
	return apply_filters( 'organica_get_font_weight', array(
		'normal' => esc_html__( 'Normal', 'organica' ),
		'bold'   => esc_html__( 'Bold', 'organica' ),
		'100'    => '100',
		'200'    => '200',
		'300'    => '300',
		'400'    => '400',
		'500'    => '500',
		'600'    => '600',
		'700'    => '700',
		'800'    => '800',
		'900'    => '900',
	) );
}

/**
 * Return array of arguments for dynamic CSS module
 *
 * @return array
 */
function organica_get_dynamic_css_options() {
	return apply_filters( 'organica_get_dynamic_css_options', array(
		'prefix'    => 'organica',
		'type'      => 'theme_mod',
		'single'    => true,
		'css_files' => array(
			ORGANICA_THEME_DIR . '/assets/css/dynamic.css',
			ORGANICA_THEME_DIR . '/assets/css/dynamic-woo.css',
			ORGANICA_THEME_DIR . '/assets/css/dynamic/widgets/widget-default.css',
			ORGANICA_THEME_DIR . '/assets/css/dynamic/widgets/taxonomy-tiles.css',
			ORGANICA_THEME_DIR . '/assets/css/dynamic/widgets/image-grid.css',
			ORGANICA_THEME_DIR . '/assets/css/dynamic/widgets/carousel.css',
			ORGANICA_THEME_DIR . '/assets/css/dynamic/widgets/smart-slider.css',
			ORGANICA_THEME_DIR . '/assets/css/dynamic/widgets/facebook.css',
			ORGANICA_THEME_DIR . '/assets/css/dynamic/widgets/subscribe.css',
			ORGANICA_THEME_DIR . '/assets/css/dynamic/widgets/track-kickstarter.css',
			ORGANICA_THEME_DIR . '/assets/css/dynamic/widgets/donate.css',
			ORGANICA_THEME_DIR . '/assets/css/dynamic/site/top-panel.css',
			ORGANICA_THEME_DIR . '/assets/css/dynamic/site/search-form.css',
			ORGANICA_THEME_DIR . '/assets/css/dynamic/site/social.css',
			ORGANICA_THEME_DIR . '/assets/css/dynamic/site/main-navigation.css',
			ORGANICA_THEME_DIR . '/assets/css/dynamic/site/footer.css',
			ORGANICA_THEME_DIR . '/assets/css/dynamic/site/elements.css',
			ORGANICA_THEME_DIR . '/assets/css/dynamic/site/post.css',
			ORGANICA_THEME_DIR . '/assets/css/dynamic/site/pagination.css',
			ORGANICA_THEME_DIR . '/assets/css/dynamic/site/misc.css',
		),
		'options'   => array(
			'header_logo_font_style',
			'header_logo_font_weight',
			'header_logo_font_size',
			'header_logo_font_family',
			'body_font_style',
			'body_font_weight',
			'body_font_size',
			'body_line_height',
			'body_font_family',
			'body_letter_spacing',
			'body_text_align',
			'h1_font_style',
			'h1_font_weight',
			'h1_font_size',
			'h1_line_height',
			'h1_font_family',
			'h1_letter_spacing',
			'h1_text_align',
			'h2_font_style',
			'h2_font_weight',
			'h2_font_size',
			'h2_line_height',
			'h2_font_family',
			'h2_letter_spacing',
			'h2_text_align',
			'h3_font_style',
			'h3_font_weight',
			'h3_font_size',
			'h3_line_height',
			'h3_font_family',
			'h3_letter_spacing',
			'h3_text_align',
			'h4_font_style',
			'h4_font_weight',
			'h4_font_size',
			'h4_line_height',
			'h4_font_family',
			'h4_letter_spacing',
			'h4_text_align',
			'h5_font_style',
			'h5_font_weight',
			'h5_font_size',
			'h5_line_height',
			'h5_font_family',
			'h5_letter_spacing',
			'h5_text_align',
			'h6_font_style',
			'h6_font_weight',
			'h6_font_size',
			'h6_line_height',
			'h6_font_family',
			'h6_letter_spacing',
			'h6_text_align',
			'breadcrumbs_font_style',
			'breadcrumbs_font_weight',
			'breadcrumbs_font_size',
			'breadcrumbs_line_height',
			'breadcrumbs_font_family',
			'breadcrumbs_letter_spacing',
			'breadcrumbs_text_align',
			'regular_accent_color_1',
			'regular_accent_color_2',
			'regular_accent_color_3',
			'regular_accent_color_4',
			'regular_accent_color_5',
			'regular_accent_color_6',
			'regular_text_color',
			'regular_link_color',
			'regular_link_hover_color',
			'regular_h1_color',
			'regular_h2_color',
			'regular_h3_color',
			'regular_h4_color',
			'regular_h5_color',
			'regular_h6_color',
			'invert_accent_color_1',
			'invert_accent_color_2',
			'invert_accent_color_3',
			'invert_text_color',
			'invert_link_color',
			'invert_link_hover_color',
			'invert_h1_color',
			'invert_h2_color',
			'invert_h3_color',
			'invert_h4_color',
			'invert_h5_color',
			'invert_h6_color',
			'badge_color_1',
			'badge_color_2',
			'badge_color_3',
			'header_bg_color',
			'header_bg_image',
			'header_bg_repeat',
			'header_bg_position_x',
			'header_bg_attachment',
			'top_panel_bg',
			'container_width',
			'footer_widgets_bg',
			'footer_bg',
		),
	) );
}

/**
 * Return array of arguments for Google Fonta loader module.
 *
 * @return array
 */
function organica_get_fonts_options() {
	return apply_filters( 'organica_get_fonts_options', array(
		'prefix'  => 'organica',
		'type'    => 'theme_mod',
		'single'  => true,
		'options' => array(
			'body'        => array(
				'family'  => 'body_font_family',
				'style'   => 'body_font_style',
				'weight'  => 'body_font_weight',
				'charset' => 'body_character_set',
			),
			'h1'          => array(
				'family'  => 'h1_font_family',
				'style'   => 'h1_font_style',
				'weight'  => 'h1_font_weight',
				'charset' => 'h1_character_set',
			),
			'h2'          => array(
				'family'  => 'h2_font_family',
				'style'   => 'h2_font_style',
				'weight'  => 'h2_font_weight',
				'charset' => 'h2_character_set',
			),
			'h3'          => array(
				'family'  => 'h3_font_family',
				'style'   => 'h3_font_style',
				'weight'  => 'h3_font_weight',
				'charset' => 'h3_character_set',
			),
			'h4'          => array(
				'family'  => 'h4_font_family',
				'style'   => 'h4_font_style',
				'weight'  => 'h4_font_weight',
				'charset' => 'h4_character_set',
			),
			'h5'          => array(
				'family'  => 'h5_font_family',
				'style'   => 'h5_font_style',
				'weight'  => 'h5_font_weight',
				'charset' => 'h5_character_set',
			),
			'h6'          => array(
				'family'  => 'h6_font_family',
				'style'   => 'h6_font_style',
				'weight'  => 'h6_font_weight',
				'charset' => 'h6_character_set',
			),
			'header_logo' => array(
				'family'  => 'header_logo_font_family',
				'style'   => 'header_logo_font_style',
				'weight'  => 'header_logo_font_weight',
				'charset' => 'header_logo_character_set',
			),
			'breadcrumbs' => array(
				'family'  => 'breadcrumbs_font_family',
				'style'   => 'breadcrumbs_font_style',
				'weight'  => 'breadcrumbs_font_weight',
				'charset' => 'breadcrumbs_character_set',
			),
		),
	) );
}

/**
 * Get default footer text.
 *
 * @since  1.0.0
 * @return string
 */
function organica_get_default_footer_text() {
	return "Superfoods are foods — mostly plant-based but also some fish and dairy — thought to be nutritionally dense and thus good for one's health. Blueberries, salmon, kale and acai are just a few examples of foods that have garnered the superfood label.";
}

function organica_is_footer_style_2() {
	return 'centered' == get_theme_mod( 'footer_layout_type' );
}

/**
 * Get default footer copyright.
 *
 * @since  1.0.0
 * @return string
 */
function organica_get_default_footer_copyright() {
	return '<span>&copy; %%year%% %%site-name%%</span> is proudly powered by <a href="http://wordpress.org/">WordPress</a> Entries (RSS) and Comments (RSS) %%privacy-policy%%';
}

/**
 * Get default top panel secondary link
 *
 * @since  1.0.0
 * @return string
 */
function organica_get_top_panel_link() {
	return esc_url( 'tel:15556445566', 'organica' );
}

/**
 * Get default top panel secondary text
 *
 * @since  1.0.0
 * @return string
 */
function organica_get_default_top_panel_text() {
	return esc_html__( '1.555.644.5566', 'organica' );
}

/**
 * Get icons set
 *
 * @return array
 */
function organica_get_icons_set() {

	ob_start();

	include ORGANICA_THEME_DIR . '/assets/js/icons.json';
	$json = ob_get_clean();

	$result = array();

	$icons = json_decode( $json, true );

	foreach ( $icons['icons'] as $icon ) {
		$result[] = $icon['id'];
	}

	return $result;
}