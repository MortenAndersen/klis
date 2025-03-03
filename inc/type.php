<?php
// Custom Taxonomy = 'personer-type'

    function custom_taxonomy_personer() {

    $labels = array(
        'name'                       => _x( 'Typer', 'Taxonomy General Name', 'klis-domain' ),
        'singular_name'              => _x( 'Type', 'Taxonomy Singular Name', 'klis-domain' ),
        'menu_name'                  => __( 'Type', 'klis-domain' ),
        'all_items'                  => __( 'All Items', 'klis-domain' ),
        'parent_item'                => __( 'Parent type', 'klis-domain' ),
        'parent_item_colon'          => __( 'Parent type:', 'klis-domain' ),
        'new_item_name'              => __( 'New Item Name', 'klis-domain' ),
        'add_new_item'               => __( 'Add New type', 'klis-domain' ),
        'edit_item'                  => __( 'Edit Item', 'klis-domain' ),
        'update_item'                => __( 'Update Item', 'klis-domain' ),
        'view_item'                  => __( 'View Item', 'klis-domain' ),
        'separate_items_with_commas' => __( 'Separate items with commas', 'klis-domain' ),
        'add_or_remove_items'        => __( 'Add or remove items', 'klis-domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'klis-domain' ),
        'popular_items'              => __( 'Popular Items', 'klis-domain' ),
        'search_items'               => __( 'Search Items', 'klis-domain' ),
        'not_found'                  => __( 'Not Found', 'klis-domain' ),
        'no_terms'                   => __( 'No items', 'klis-domain' ),
        'items_list'                 => __( 'Items list', 'klis-domain' ),
        'items_list_navigation'      => __( 'Items list navigation', 'klis-domain' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest'               => true,
        'show_in_nav_menus'          => false

    );
    register_taxonomy( 'person-type', array( 'person' ), $args );
}

add_action( 'init', 'custom_taxonomy_personer', 2 );