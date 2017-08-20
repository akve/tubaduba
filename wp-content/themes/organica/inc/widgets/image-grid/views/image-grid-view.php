<?php
/**
 * Template part to display Image Grid widget.
 *
 * @package Organica
 * @subpackage widgets
 */
?>

<div class="widget-image-grid__holder invert col-xs-12 col-sm-6 col-md-<?php echo $columns_class; ?> col-lg-<?php echo $columns_class; ?>">
	<figure class="widget-image-grid__inner" <?php echo $inline_style; ?>>
		<?php echo $image; ?>
		<figcaption class="widget-image-grid__content">
			<h2 class="widget-image-grid__title">
				<a href="<?php echo $permalink; ?>"><?php echo $title; ?></a>
			</h2>
		</figcaption>
	</figure>
</div>