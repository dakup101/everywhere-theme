<?php if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Elementy Globalne',
        'menu_title'    => 'Elementy Globalne',
        'menu_slug'     => 'theme-global',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}