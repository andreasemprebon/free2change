<?php get_header(); ?>
<?php require_once( get_template_directory() .'/template-parts/post-comments.php' ); ?>

<script text="type/javascript">
    $(document).ready(function () {
        /**
         * Imposto come attiva la pagine blog
         */
        $(".menu a.blog").addClass("active");
    });
</script>

<div id="primary" class="content-area">
  <main id="main" class="site-main single" role="main">
    <?php
    // Start the loop.
    while ( have_posts() ) : the_post();

      // Include the single post content template.
      get_template_part( 'template-parts/post-content-single', 'single' );

      // If comments are open or we have at least one comment, load up the comment template.
      if ( comments_open() || get_comments_number() ) {
        comments_template();
      }

      /*if ( is_singular( 'attachment' ) ) {
        // Parent post navigation.
        the_post_navigation( array(
          'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'twentysixteen' ),
        ) );
      } elseif ( is_singular( 'post' ) ) {
        // Previous/next post navigation.
        the_post_navigation( array(
          'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentysixteen' ) . '</span> ' .
            '<span class="screen-reader-text">' . __( 'Next post:', 'twentysixteen' ) . '</span> ' .
            '<span class="post-title">%title</span>',
          'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentysixteen' ) . '</span> ' .
            '<span class="screen-reader-text">' . __( 'Previous post:', 'twentysixteen' ) . '</span> ' .
            '<span class="post-title">%title</span>',
        ) );
      }*/

      // End of the loop.
    endwhile;
    ?>

  </main><!-- .site-main -->

</div><!-- .content-area -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>