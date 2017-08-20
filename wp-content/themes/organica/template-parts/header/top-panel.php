<?php
/**
 * Template part for top panel in header.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Organica
 */

// Don't show top panel if all elements are disabled
if ( ! organica_is_top_panel_visible() ) {
	return;
} ?>

<div class="top-panel">
	<div <?php echo organica_get_container_classes( array( 'top-panel__wrap container' ) ); ?>>
		<?php organica_top_menu(); ?>
		<?php organica_top_message( '<div class="top-panel__message">%s</div>' ); ?>
		<div class="search_switcher_block">
			<?php
			organica_top_search();
			organica_top_currency_switcher();
			organica_top_language_selector();
			?>
		</div>
	</div>
</div><!-- .top-panel -->