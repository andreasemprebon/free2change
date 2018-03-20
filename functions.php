<?php
/**
 * Created by Andrea Semprebon.
 * User: Andrea
 * Date: 18/03/18
 * Time: 13:10
 */

function catch_first_image() {
    global $post;
    $first_img = "";

    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches[1][0];

    /**
     * Non ho trovato nessuna immagine,
     * ne definisco una di default
     */
    if ( empty($first_img) ) {
        $first_img = "/images/default.jpg";
    }

    return $first_img;
}

function post_content_without_first_image() {
    global $post;
    $first_img = "";

    $output = preg_match_all('/(<img.+src=[\'"][^\'"]+[\'"].*>)/i', $post->post_content, $matches);

    $first_img = $matches[1][0];
    $content = $post->post_content;

    /**
     * Non ho trovato nessuna immagine,
     * ne definisco una di default
     */
    if ( !empty($first_img) ) {
        $content = str_replace($first_img, "", $content);
    }

    return $content;
}

function custom_excerpt_length( $length ) {
    return 35;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999);

?>
