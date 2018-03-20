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
        function setSlideshowHeight() {
            var slideshowHeight = $(window).height() -
                $(".main-header").outerHeight() -
                $(".menu").outerHeight() -
                $("#wpadminbar").outerHeight();
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

        <div class="image" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/img/slideshow/foto0.jpg');">
            <div class="background-nero-opaco"></div>

            <div class="contenuto">
                <p class="titolo">
                    Alberi gialli come fotografia titolo su due righe
                </p>

                <a href="#"class="btn btn-leggi">Continua &rarr;</a>
            </div>

        </div>

        <div class="image" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/img/slideshow/foto1.jpg');">
            <div class="background-nero-opaco"></div>

            <div class="contenuto">
                <p class="titolo">
                    Articolo in cui si protesta
                </p>

                <a href="#" class="btn btn-leggi">Continua &rarr;</a>
            </div>

        </div>

    </div>

</div>

<?php get_footer(); ?>