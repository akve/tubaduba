<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Organica
 */
$sidebar_position = get_theme_mod( 'sidebar_position' );

if ( 'fullwidth' === $sidebar_position
     || is_404()
     || ! is_active_sidebar( 'sidebar' )
     || ( function_exists( 'is_product' ) && is_product() ) ) {
	return;
}
if ('one-right-sidebar' === $sidebar_position) {
?>
	<div class="sidebar-expander" onclick="expandSidebar()"><i class="fa fa-filter"></i></div>
<?php
}
do_action( 'organica_render_widget_area', 'sidebar' );

?>