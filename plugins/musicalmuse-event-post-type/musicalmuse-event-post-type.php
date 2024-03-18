<?php
/*
* Plugin Name: MusicalMuse Event Post Type
*/

function musicalmuse_register_post_type() {

    $labels = array(

        'name'                     => __( 'Events', 'musicalmuse' ),
        'singular_name'            => __( 'Event', 'musicalmuse' ),
        'add_new'                  => __( 'Add New', 'musicalmuse' ),
        'add_new_item'             => __( 'Add New Event', 'musicalmuse' ),
        'edit_item'                => __( 'Edit Event', 'musicalmuse' ),
        'new_item'                 => __( 'New Event', 'musicalmuse' ),
        'view_item'                => __( 'View Event', 'musicalmuse' ),
        'view_items'               => __( 'View Events', 'musicalmuse' ),
        'search_items'             => __( 'Search Events', 'musicalmuse' ),
        'not_found'                => __( 'No Events found.', 'musicalmuse' ),
        'not_found_in_trash'       => __( 'No Events found in Trash.', 'musicalmuse' ),
        'parent_item_colon'        => __( 'Parent Events:', 'musicalmuse' ),
        'all_items'                => __( 'All Events', 'musicalmuse' ),
        'archives'                 => __( 'Event Archives', 'musicalmuse' ),
        'attributes'               => __( 'Event Attributes', 'musicalmuse' ),
        'insert_into_item'         => __( 'Insert into event', 'musicalmuse' ),
        'uploaded_to_this_item'    => __( 'Uploaded to this event', 'musicalmuse' ),
        'featured_image'           => __( 'Featured Image', 'musicalmuse' ),
        'set_featured_image'       => __( 'Set featured image', 'musicalmuse' ),
        'remove_featured_image'    => __( 'Remove featured image', 'musicalmuse' ),
        'use_featured_image'       => __( 'Use as featured image', 'musicalmuse' ),
        'menu_name'                => __( 'Events', 'musicalmuse' ),
        'filter_items_list'        => __( 'Filter event list', 'musicalmuse' ),
        'filter_by_date'           => __( 'Filter by date', 'musicalmuse' ),
        'items_list_navigation'    => __( 'Events list navigation', 'musicalmuse' ),
        'items_list'               => __( 'Events list', 'musicalmuse' ),
        'item_published'           => __( 'Event published.', 'musicalmuse' ),
        'item_published_privately' => __( 'Event published privately.', 'musicalmuse' ),
        'item_reverted_to_draft'   => __( 'Event reverted to draft.', 'musicalmuse' ),
        'item_scheduled'           => __( 'Event scheduled.', 'musicalmuse' ),
        'item_updated'             => __( 'Event updated.', 'musicalmuse' ),
        'item_link'                => __( 'Event Link', 'musicalmuse' ),
        'item_link_description'    => __( 'A link to an event.', 'musicalmuse' ),

    );

    $args = array(

        'labels'                => $labels,
        'description'           => __( 'organize and manage company events', 'musicalmuse' ),
        'public'                => false,
        'hierarchical'          => false,
        'exclude_from_search'   => true,
        'publicly_queryable'    => false,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_nav_menus'     => false,
        'show_in_admin_bar'     => false,
        'show_in_rest'          => true,
        'menu_position'         => null,
        'menu_icon'             => 'dashicons-calendar-alt',
        'capability_type'       => 'post',
        'capabilities'          => array(),
        'supports'              => array( 'title', 'editor', 'revisions' ),
        'taxonomies'            => array(),
        'has_archive'           => false,
        'rewrite'               => array( 'slug' => 'events' ),
        'query_var'             => true,
        'can_export'            => true,
        'delete_with_user'      => false,
        'template'              => array(),
        'template_lock'         => false,

    );

    register_post_type( 'musicalmuse_event', $args );

}
add_action( 'init', 'musicalmuse_register_post_type' );