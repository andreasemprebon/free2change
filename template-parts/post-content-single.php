<?php
/**
 * Created by PhpStorm.
 * User: Andrea
 * Date: 18/03/18
 * Time: 13:13
 */
$postData = get_posts($postParameters);
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="single">

        <div class="header">

            <a class="contenuto" href="<?php echo esc_url( get_permalink() ); ?>" style="background-image: url('<?php echo catch_first_image(); ?>');"></a>

            <div class="titolo">
                <?php the_title("<p>", "</p>"); ?>
            </div>

        </div>

        <div class="metadata">
            <div class="metadata-container">
              <div class="datum autore">
                  di <?php echo the_author_meta( 'display_name', $postData[0]->post_author ); ?>
              </div>

              <div class="datum data">
                  <?php echo get_the_date( 'd M Y h:m', $postData[0]->ID ); ?>
              </div>

              <div class="datum commenti">

              </div>
          </div>
        </div>

      <div class="clear"></div>

      <div class="testo">
          <?php echo post_content_without_first_image(); ?>
      </div>

      <div class="autore-desc">
        <div class="avatar">
          <?php echo get_avatar( get_the_author_meta('user_email'), $size = '50'); ?>
         </div>
         <div class="desc">
           <p class="nome"><?php echo the_author_meta( 'display_name', $postData[0]->post_author ); ?></p>
           <?php echo nl2br(get_the_author_meta('description')); ?>
         </div>
      </div>


    </div>

</article>
