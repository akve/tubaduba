<?php
/**
 * Template part to display Carousel widget.
 *
 * @package Organica
 * @subpackage widgets
 */
?>

<div class="inner">
	<div class="content-wrapper">
		<header class="entry-header">
			<?php echo $image; ?>
			<div class="entry-meta">
				<?php echo $date; ?>
				<?php echo $author; ?>
				<?php echo $comments; ?>
			</div>
			<?php echo $title; ?>
		</header>
		<div class="entry-content">
			<?php echo $content; ?>
			<?php echo $terms_line; ?>
		</div>
	</div>
	<footer class="entry-footer">
		<?php echo $more_button; ?>
	</footer>
</div>