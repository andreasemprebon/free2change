<?php
if ( post_password_required() ) {
	return;
}
?>

<div class="commenti" id="comments">

	<div class="intestazione">
			<div class="intestazione-container">
			<div class="intestazione-desc">
				<?php echo number_format_i18n( get_comments_number() ) ?>
				<?php if (get_comments_number() == 1): ?>
						Commento
				<?php else: ?>
						Commenti
				<?php endif; ?>
			</div>
		</div>
	</div>

	<div class="clear"></div>

	<?php if ( have_comments() ) : ?>

		<ol class="commentlist">
			<?php
				wp_list_comments(
					array(
					'callback' => 'free2change_comments',
					'style'    => 'ol',
					)
				);
			?>
		</ol>
	<?php else: ?>
			<p class="nessun-commento">
				Non c'è ancora alcun commento a questo articolo.
			</p>
	<?php endif; ?>

	<?php comment_form(array(
		'title_reply' => '<div class="intestazione"><div class="intestazione-container">
												<div class="intestazione-desc">Lascia un commento</div></div></div><div class="clear"></div>',
		'title_reply_to' => '<div class="intestazione"><div class="intestazione-container">
												<div class="intestazione-desc">Rispondi a %s</div></div></div><div class="clear"></div>',
		'cancel_reply_link'	=> 'Annulla risposta',
		'comment_notes_before' => '',
		'label_submit' => 'Commenta'
	)
	); ?>

</div>
