<footer class="comment-meta">
	<div class="comment-author vcard">
		<?php echo organica_comment_author_avatar(); ?>
	</div>
	<div class="comment-metadata">
		<?php printf( '<span class="posted-by">%2$s</span> %1$s', organica_get_comment_author_link(), esc_html__( 'Posted by', 'organica' ) ); ?>
		<?php echo organica_get_comment_date( array( 'format' => 'd M, Y' ) ); ?>
	</div>
</footer>
<div class="comment-content">
	<?php echo organica_get_comment_text(); ?>
</div>
<div class="reply">
	<?php echo organica_get_comment_reply_link( array( 'reply_text' => '<i class="material-icons">reply</i>' ) ); ?>
</div>