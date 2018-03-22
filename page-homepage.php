<?php get_header(); ?>

<script text="type/javascript">
    $(document).ready(function () {
        /**
         * Imposto come attiva la homepage
         */
        $(".menu a.home").addClass("active");

        /**
         * Imposto l'altezzo dello slideshow
         */
        function getHeight(elem) {
            var height = $(elem + ":visible").outerHeight();
            if ( isNaN(height) ) {
              return 0;
            }
            return height;
        }

        function setSlideshowHeight() {
            var slideshowHeight = $(window).height() -
                getHeight(".main-header") -
                getHeight(".menu") -
                getHeight("#wpadminbar") -
                parseInt( $(".slideshow").css("margin-top") );
            slideshowHeight = Math.min($(".slideshow").width(), slideshowHeight);
            $(".slideshow").height( slideshowHeight + "px"  );
        }

        $(window).resize(function () {
            setSlideshowHeight();
        });

        setSlideshowHeight();
    });
</script>


<div class="slideshow">

    <div class="container">

        <?php
          /**
           * Recupero i post che hanno come categoria "In Evidenza".
           * Per ora mi limito a 2, vediamo in futuro come espanderli
           */
           query_posts( array(
              'category_name'   => 'in-evidenza',
              'posts_per_page'  => 2,
              'order_by'        => 'date',
              'order'           => 'DESC'
          ) );

          while ( have_posts() ) : the_post();
         ?>

        <div class="image" style="background-image: url('<?php echo catch_first_image(); ?>');">
            <div class="background-nero-opaco"></div>

            <div class="contenuto">
                <p class="titolo">
                    <?php the_title(); ?>
                </p>

                <a href="#"class="btn btn-leggi">Continua &rarr;</a>
            </div>

        </div>

      <?php endwhile; ?>

    </div>

</div>

<?php get_footer(); ?>
