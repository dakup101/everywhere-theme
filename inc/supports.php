<?php function suports(){

    // Theme Supports

    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support( 'woocommerce' );
    // add_theme_support( 'wc-product-gallery-lightbox' );
    // add_theme_support( 'wc-product-gallery-slider' );

    // CF7 Auto <p>

    add_filter( 'wpcf7_autop_or_not', '__return_false' );

    // Post Types supports

    add_action( 'init', function() {
        remove_post_type_support( 'page', 'editor' );
    }, 99);
}