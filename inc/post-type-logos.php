<?php 
function logos_post_type() {

	$labels = array(
		'name'                  => _x( 'Logotypy', 'Post Type General Name', 'ttage-theme' ),
		'singular_name'         => _x( 'Logotyp', 'Post Type Singular Name', 'ttage-theme' ),
		'menu_name'             => __( 'Logotypy', 'ttage-theme' ),
		'name_admin_bar'        => __( 'Logotypy', 'ttage-theme' ),
		'archives'              => __( 'Archiwum Logotypów', 'ttage-theme' ),
		'attributes'            => __( 'Atrybuty Logotypów', 'ttage-theme' ),
		'parent_item_colon'     => __( 'Rodziciel', 'ttage-theme' ),
		'all_items'             => __( 'Wszystko', 'ttage-theme' ),
		'add_new_item'          => __( 'Dodaj nowy', 'ttage-theme' ),
		'add_new'               => __( 'Dodaj nowy', 'ttage-theme' ),
		'new_item'              => __( 'Nowy Logotyp', 'ttage-theme' ),
		'edit_item'             => __( 'Edytuj', 'ttage-theme' ),
		'update_item'           => __( 'Zaktualizuj', 'ttage-theme' ),
		'view_item'             => __( 'Zobacz', 'ttage-theme' ),
		'view_items'            => __( 'Sprawdź', 'ttage-theme' ),
		'search_items'          => __( 'Szukaj', 'ttage-theme' ),
		'not_found'             => __( 'Nie znalieziono', 'ttage-theme' ),
		'not_found_in_trash'    => __( 'Nie znaleziono w Koszyku', 'ttage-theme' ),
		'featured_image'        => __( 'Obrazek wyróżniający', 'ttage-theme' ),
		'set_featured_image'    => __( 'Ustaw obrazek', 'ttage-theme' ),
		'remove_featured_image' => __( 'Usuń obrazek', 'ttage-theme' ),
		'use_featured_image'    => __( 'Użyj jako obrazek', 'ttage-theme' ),
		'insert_into_item'      => __( 'Dodaj do logotypu', 'ttage-theme' ),
		'uploaded_to_this_item' => __( 'Załadowane', 'ttage-theme' ),
		'items_list'            => __( 'Lista', 'ttage-theme' ),
		'items_list_navigation' => __( 'Naw', 'ttage-theme' ),
		'filter_items_list'     => __( 'Filtruj', 'ttage-theme' ),
	);
	$args = array(
		'label'                 => __( 'Logotyp', 'ttage-theme' ),
		'description'           => __( 'Logotypy Firm', 'ttage-theme' ),
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-images-alt2',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
        'rewrite'               => false,
		'capability_type'       => 'post',
	);
	register_post_type( 'logo', $args );

}
add_action( 'init', 'logos_post_type', 0 );

function my_page_columns() {
    return array(
        'cb' => '< input type="checkbox" />',
        'title' => 'Title',
        'logo' => 'Logotyp'
    );
}
add_filter("manage_edit-logo_columns", "my_page_columns");

function logo_custom_columns($column){
    global $post;
    if ($column == 'logo') echo '<img height="50" src="' . get_field('img', $post->ID) . '">';
}
add_action("manage_logo_posts_custom_column", "logo_custom_columns");