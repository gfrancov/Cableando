<?php

/* Wordpress unnecessary displays HTML */
remove_action( 'wp_head', 'feed_links_extra', 3 ); // Display the links to the extra feeds such as category feeds
remove_action( 'wp_head', 'feed_links', 2 ); // Display the links to the general feeds: Post and Comment Feed
remove_action( 'wp_head', 'rsd_link' ); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action( 'wp_head', 'wlwmanifest_link' ); // Display the link to the Windows Live Writer manifest file.
remove_action( 'wp_head', 'index_rel_link'); // index link
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); // prev link
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); // start link
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 ); // Display relational links for the posts adjacent to the current post.
remove_action( 'wp_head', 'wp_generator' ); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
add_theme_support( 'post-thumbnails' );

function wps_deregister_styles() {
    wp_dequeue_style( 'global-styles' );
}
add_action( 'wp_enqueue_scripts', 'wps_deregister_styles', 100 );

/* Theme support */
function cableando_theme_support() {

    /* Dynamic title text */
    add_theme_support('title-tag');

    

}
add_action( 'after_setup_theme', 'cableando_theme_support');

/* Load custom styles CSS */
function cableando_register_styles() {

    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('cableando-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css", array(), '3.3.7', 'all');
    wp_enqueue_style('cableando-styles', get_template_directory_uri() . "/style.css", array(), $version, 'all');

}
add_action( 'wp_enqueue_scripts', 'cableando_register_styles');

/* Load custom Javascript */
function cableando_register_scripts() {

    wp_enqueue_script('cableando-jquery', "https://code.jquery.com/jquery-3.2.1.slim.min.js", array(), "2.1.3", true);
    wp_enqueue_script('cableando-popper', "https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js", array(), "2.1.3", true);
    wp_enqueue_script('cableando-bootstrapjs', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js", array(), "2.1.3", true);
    wp_enqueue_script('fontawesome', "https://kit.fontawesome.com/378145776d.js", array(), "1.0.0");
    wp_enqueue_script('cableando-nav-selector', get_template_directory_uri() . "/nav-selector.js", array(), "1.0.0");

}

add_action( 'wp_enqueue_scripts', 'cableando_register_scripts');


?>