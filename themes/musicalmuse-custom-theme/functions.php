<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package musicalmuse
 * @since 1.0.0
 */

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function musicalmuse_wp_enqueue_scripts() {
	wp_enqueue_style(
		'musicalmuse-custom-theme',
		get_stylesheet_uri(),
		[],
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'musicalmuse_wp_enqueue_scripts' );

function block_theme_custom_use_block_editor_for_post_type($can_edit, $post_type){
	if($post_type == 'product'){
		$can_edit = true;
	}
	
	return $can_edit;
}
add_filter('use_block_editor_for_post_type', 'block_theme_custom_use_block_editor_for_post_type', 10, 2);
