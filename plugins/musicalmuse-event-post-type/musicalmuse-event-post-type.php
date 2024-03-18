<?php
/*
* Plugin Name: MusicalMuse Event Post Type
*/

function musicalmuse_register_post_type() {

    $labels = array(

        'name'                     => __( 'Events', 'TEXTDOMAINHERE' ),
        'singular_name'            => __( 'Event', 'TEXTDOMAINHERE' ),
        'add_new'                  => __( 'Add New', 'TEXTDOMAINHERE' ),
        'add_new_item'             => __( 'Add New Event', 'TEXTDOMAINHERE' ),
        'edit_item'                => __( 'Edit Event', 'TEXTDOMAINHERE' ),
        'new_item'                 => __( 'New Event', 'TEXTDOMAINHERE' ),
        'view_item'                => __( 'View Event', 'TEXTDOMAINHERE' ),
        'view_items'               => __( 'View Events', 'TEXTDOMAINHERE' ),
        'search_items'             => __( 'Search Events', 'TEXTDOMAINHERE' ),
        'not_found'                => __( 'No Events found.', 'TEXTDOMAINHERE' ),
        'not_found_in_trash'       => __( 'No Events found in Trash.', 'TEXTDOMAINHERE' ),
        'parent_item_colon'        => __( 'Parent Events:', 'TEXTDOMAINHERE' ),
        'all_items'                => __( 'All Events', 'TEXTDOMAINHERE' ),
        'archives'                 => __( 'Event Archives', 'TEXTDOMAINHERE' ),
        'attributes'               => __( 'Event Attributes', 'TEXTDOMAINHERE' ),
        'insert_into_item'         => __( 'Insert into event', 'TEXTDOMAINHERE' ),
        'uploaded_to_this_item'    => __( 'Uploaded to this event', 'TEXTDOMAINHERE' ),
        'featured_image'           => __( 'Featured Image', 'TEXTDOMAINHERE' ),
        'set_featured_image'       => __( 'Set featured image', 'TEXTDOMAINHERE' ),
        'remove_featured_image'    => __( 'Remove featured image', 'TEXTDOMAINHERE' ),
        'use_featured_image'       => __( 'Use as featured image', 'TEXTDOMAINHERE' ),
        'menu_name'                => __( 'Events', 'TEXTDOMAINHERE' ),
        'filter_items_list'        => __( 'Filter event list', 'TEXTDOMAINHERE' ),
        'filter_by_date'           => __( 'Filter by date', 'TEXTDOMAINHERE' ),
        'items_list_navigation'    => __( 'Events list navigation', 'TEXTDOMAINHERE' ),
        'items_list'               => __( 'Events list', 'TEXTDOMAINHERE' ),
        'item_published'           => __( 'Event published.', 'TEXTDOMAINHERE' ),
        'item_published_privately' => __( 'Event published privately.', 'TEXTDOMAINHERE' ),
        'item_reverted_to_draft'   => __( 'Event reverted to draft.', 'TEXTDOMAINHERE' ),
        'item_scheduled'           => __( 'Event scheduled.', 'TEXTDOMAINHERE' ),
        'item_updated'             => __( 'Event updated.', 'TEXTDOMAINHERE' ),
        'item_link'                => __( 'Event Link', 'TEXTDOMAINHERE' ),
        'item_link_description'    => __( 'A link to an event.', 'TEXTDOMAINHERE' ),

    );

    $args = array(

        'labels'                => $labels,
        'description'           => __( 'organize and manage company events', 'TEXTDOMAINHERE' ),
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