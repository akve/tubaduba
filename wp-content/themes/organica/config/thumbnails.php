<?php
/**
 * Thumbnails configuration.
 *
 * @package Organica
 */

add_action( 'after_setup_theme', 'organica_register_image_sizes', 5 );
function organica_register_image_sizes() {
	set_post_thumbnail_size( 370, 270, true );

	// Registers a new image sizes.
    add_image_size( 'organica-thumb-s', 150, 150, true );
    add_image_size( 'organica-thumb-m', 400, 400, true );
    add_image_size( 'organica-thumb-l', 1170, 780, true );
    add_image_size( 'organica-post-thumbnail-large', 770, 480, true );
    add_image_size( 'organica-thumb-xl', 1920, 1080, true );
    add_image_size( 'organica-thumb-198-198', 198, 198, true );
    add_image_size( 'organica-thumb-237-97', 237, 97, true );
    add_image_size( 'organica-thumb-570-370', 570, 370, true );
    add_image_size( 'organica-thumb-1170-854', 1170, 854, true );
}
