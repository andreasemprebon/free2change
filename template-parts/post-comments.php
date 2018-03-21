<?php
function free2change_comments( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment;
		switch ( $comment->comment_type ) :
			case 'pingback':
			case 'trackback':
				break;
			default:
				// Proceed with normal comments.
				global $post;
		?>
		<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
			<div class="commento" id="comment-<?php comment_ID(); ?>">
        <div class="avatar">
          <?php echo get_avatar( $comment, $size = '50' ); ?>
					<?php if ($comment->user_id === $post->post_author): // Se chi commenta è l'autore, lo segnalo ?>
							<div class="commento-dell-autore">
								<?php include(get_stylesheet_directory() . "/img/menu/blog.svg"); ?>
							</div>
					<?php endif; ?>
         </div>
         <div class="desc">
           <p class="nome">
						 <?php echo get_comment_author_link(); ?>
						 <span class="data"><?php echo get_comment_date() ." ". get_comment_time(); ?></span>
					 </p>

					 <?php if ( $comment->comment_approved == '0' ) : ?>
						 	<p class="moderazione">
	 							Il tuo commento è in attesa di moderazione.
							</p>
	 				 <?php endif; ?>
           <?php comment_text(); ?>
					 <p class="azioni">
						 <?php edit_comment_link("Modifica", '<span class="edit-link">', '</span>' ); ?>
							<span class="reply-link">
								<?php comment_reply_link(
				 					array_merge(
				 						$args, array(
				 							'reply_text' => "Rispondi",
				 							'depth'      => $depth,
				 							'max_depth'  => $args['max_depth'],
				 						)
				 					)
				 				); ?>
						</span>
					 </p>
         </div>
      </div>
		<?php
				break;
		endswitch; // end comment_type check
	}
  ?>
