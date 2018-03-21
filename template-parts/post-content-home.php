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

    <div class="post">

        <div class="image">

            <a class="contenuto" href="<?php echo esc_url( get_permalink() ); ?>" style="background-image: url('<?php echo catch_first_image(); ?>');"></a>

            <div class="data">
                <span class="day">
                    <?php echo get_the_date( 'd', $postData[0]->ID ) ?>
                </span>
                <span class="mese-anno">
                    <?php echo get_the_date( 'M y', $postData[0]->ID ) ?>
                </span>
            </div>
        </div>

        <div class="testo">

            <div class="titolo">
                <div class="link">
                    <?php the_title( sprintf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' ); ?>
                </div>

                <div class="icon commenti">
                    <a href="<?php echo esc_url( get_permalink() ); ?>#comments">
                        <?php include(get_stylesheet_directory() . "/img/post/comment-bubble.svg"); ?>
                        <span class="numero">
                            <?php echo get_comments_number(); ?>
                        </span>
                    </a>
                </div>
            </div>

            <div class="autore">
                di <?php echo the_author_meta( 'display_name', $postData[0]->post_author ); ?>
            </div>

            <div class="estratto">
                <?php the_excerpt(); ?>
            </div>

        </div>

        <div class="pulsante">
            <a class="btn btn-continua-lettura" href="<?php echo get_permalink( get_the_ID() ) ?>">
                Continua &rarr;
            </a>
        </div>


    </div>

</article>

<div class="separatore-post"></div>
