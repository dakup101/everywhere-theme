<?php
// Register Custom Post Type
function post_type_offer() {

	$labels = array(
		'name'                  => _x( 'Oferta', 'Post Type General Name', 'evrwhr' ),
		'singular_name'         => _x( 'Oferta', 'Post Type Singular Name', 'evrwhr' ),
		'menu_name'             => __( 'Oferty', 'evrwhr' ),
		'name_admin_bar'        => __( 'Oferta', 'evrwhr' ),
		'archives'              => __( 'Archiwum', 'evrwhr' ),
		'attributes'            => __( 'Atrybuty', 'evrwhr' ),
		'parent_item_colon'     => __( 'Rodzic', 'evrwhr' ),
		'all_items'             => __( 'Wszyskie', 'evrwhr' ),
		'add_new_item'          => __( 'Dodaj', 'evrwhr' ),
		'add_new'               => __( 'Dodaj', 'evrwhr' ),
		'new_item'              => __( 'Nowa oferta', 'evrwhr' ),
		'edit_item'             => __( 'Edytuj', 'evrwhr' ),
		'update_item'           => __( 'Aktualizuj', 'evrwhr' ),
		'view_item'             => __( 'Zobacz', 'evrwhr' ),
		'view_items'            => __( 'Zobacz', 'evrwhr' ),
		'search_items'          => __( 'Szukaj', 'evrwhr' ),
		'not_found'             => __( 'Nie znaleziono', 'evrwhr' ),
		'not_found_in_trash'    => __( 'Nie znaleziono', 'evrwhr' ),
		'featured_image'        => __( 'Thumbnail', 'evrwhr' ),
		'set_featured_image'    => __( 'Ustaw thumbnail', 'evrwhr' ),
		'remove_featured_image' => __( 'Usuń thumbnail', 'evrwhr' ),
		'use_featured_image'    => __( 'Uzyj jako thumbnail', 'evrwhr' ),
		'insert_into_item'      => __( 'Wstaw', 'evrwhr' ),
		'uploaded_to_this_item' => __( 'Załączono', 'evrwhr' ),
		'items_list'            => __( 'Lista', 'evrwhr' ),
		'items_list_navigation' => __( 'Nawigacja', 'evrwhr' ),
		'filter_items_list'     => __( 'Filtruj', 'evrwhr' ),
	);
	$args = array(
		'label'                 => __( 'Oferta', 'evrwhr' ),
		'description'           => __( 'Oferta Everywher\'a', 'evrwhr' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor',  ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
        'menu_icon'             => 'dashicons-money-alt',
        'rewrite'               => array( 'slug' => 'oferta', 'with_front' => false ), 
	);
	register_post_type( 'offer', $args );

}
add_action( 'init', 'post_type_offer', 0 );