<?php
/**
 * Template part for default Header layout.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Organica
 */
?>

<?php organica_social_list( 'header' ); ?>
<div class="site-branding">
	<?php organica_header_logo() ?>
	<?php organica_site_description(); ?>
</div>
<?php organica_header_cart(); ?>
<?php organica_main_menu(); ?>