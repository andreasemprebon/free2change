<?php get_header(); ?>

<script text="type/javascript">
    $(document).ready(function () {
        /**
         * Imposto come attiva la pagine blog
         */
        $(".menu a.blog").addClass("active");


    });
</script>


<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="container">
            <?php if ( have_posts() ) : ?>

                <?php
                // Start the loop.
                while ( have_posts() ) : the_post();

                    /*
                     * Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                    get_template_part( 'template-parts/post-content-home', get_post_format() );

                // End the loop.
                endwhile;

                $olderPost = get_next_posts_link("&larr; Articoli meno recenti");
                $newerPost = get_previous_posts_link("Articoli più recenti &rarr;");
                ?>

            <div class="navigazione">
                <?php if ($newerPost) :  ?>

                    <div class="btn newer">
                        <?php echo $newerPost; ?>
                    </div>

                <?php endif; ?>

                <?php if ($olderPost): ?>
                    <div class="btn older">
                        <?php echo $olderPost; ?>
                    </div>
                <?php endif; ?>
            </div>

            <?php

            // If no content, include the "No posts found" template.
            else :
                get_template_part( 'template-parts/content', 'none' );

            endif;
            ?>
        </div>
    </main><!-- .site-main -->

    <div class="sidebar">


    </div>

</div><!-- .content-area -->


<?php get_footer(); ?>
