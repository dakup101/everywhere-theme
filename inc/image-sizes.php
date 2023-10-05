<?php
function custom_image_sizes() {
    
    // Offer Thumb | 6 x 3.5

    add_image_size( 'offer-thumb-sm', 600, 350, true );
    add_image_size( 'offer-thumb', 980, 560, true );

    // Portfolio Thumb | 1 x 1

    add_image_size( 'portfolio-thumb-sm', 576, 576, true );
    add_image_size( 'portfolio-thumb-md', 768, 768, true );
    add_image_size( 'portfolio-thumb', 1024, 1024, true );    

    add_image_size( 'case-study', 900, 600, true );    
}
add_action( 'after_setup_theme', 'custom_image_sizes' );