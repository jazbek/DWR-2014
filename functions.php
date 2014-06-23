<?php
/*
Author: Ole Fredrik Lie
URL: http://olefredrik.com
*/


// Various clean up functions
require_once('library/cleanup.php'); 

// Required for Foundation to work properly
require_once('library/foundation.php');

// Register all navigation menus
require_once('library/navigation.php');

// Add menu walker
require_once('library/menu-walker.php');

// Create widget areas in sidebar and footer
require_once('library/widget-areas.php');

// Return entry meta information for posts
require_once('library/entry-meta.php');

// Enqueue scripts
require_once('library/enqueue-scripts.php');

// Add theme support
require_once('library/theme-support.php');

// Add custom widgets

add_action('widgets_init', function(){
	require_once('library/widgets/dwr-recent-posts.php');
}, 1);


/**
 * @param int $columns
 *
 * @return bool
 */
function dwr_new_row( $columns = 3, $offset = 0, $cur_count = null, $total = null ) {
	if ( $cur_count == null ) {
		global $wp_query;
		$cur_count = $wp_query->current_post;
		$total = $wp_query->post_count;
	}
	$current_iteration = $cur_count + 1;
	return ( $current_iteration != $offset && ( $current_iteration != $total ) && ( ( $current_iteration - $offset ) % $columns ) == 0);
}

add_filter( 'pre_get_posts', 'dwr_set_per_page' );
function dwr_set_per_page( $query ) {
	if ( $query->is_main_query() && is_front_page() && $query->get( 'paged' ) < 2 ) {
		$query->set( 'posts_per_page', get_option( 'posts_per_page' ) + 1 );
	}
	return $query;
}

function dwr_get_related_stories() {
	global $post;
	$related_stories = array();
	$category        = get_the_category();
	if ( $category ) {
		$related_stories = get_posts(
			array(
				'cat'            => $category[0]->ID,
				'posts_per_page' => 3,
				'post__not_in'   => array( $post->ID ),
			)
		);
	}
	if ( count( $related_stories ) < 3 ) {
		$tags = get_the_terms( $post, 'post_tag', array( 'fields' => 'ids' ) );
		if ( $tags ) {
			$related_stories_by_tag = get_posts(
				array(
					'tag__in'        => wp_list_pluck( $tags, 'id' ),
					'posts_per_page' => 3,
					'post__not_in'   => array( $post->ID ),
				)
			);
			if ( count( $related_stories_by_tag ) ) {
				$related_stories = array_slice( array_merge( $related_stories, $related_stories_by_tag ), 0, 3 );
			}
		}
	}
	return $related_stories;
}

// Register Custom Post Type
function dwr_product_post_type() {

	$labels = array(
		'name'                => _x( 'DWR Products', 'Post Type General Name', 'dwr' ),
		'singular_name'       => _x( 'Product', 'Post Type Singular Name', 'dwr' ),
		'menu_name'           => __( 'DWR Products', 'dwr' ),
		'parent_item_colon'   => __( 'Parent Item:', 'dwr' ),
		'all_items'           => __( 'All Products', 'dwr' ),
		'view_item'           => __( 'View Product', 'dwr' ),
		'add_new_item'        => __( 'Add New Product', 'dwr' ),
		'add_new'             => __( 'Add New', 'dwr' ),
		'edit_item'           => __( 'Edit Item', 'dwr' ),
		'update_item'         => __( 'Update Item', 'dwr' ),
		'search_items'        => __( 'Search Product', 'dwr' ),
		'not_found'           => __( 'Not found', 'dwr' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'dwr' ),
	);
	$args = array(
		'label'               => __( 'dwr_product', 'dwr' ),
		'description'         => __( 'DWR Products', 'dwr' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'thumbnail' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => false,
		'capability_type'     => 'page',
	);
	register_post_type( 'dwr_product', $args );

}
// Hook into the 'init' action
add_action( 'init', 'dwr_product_post_type', 0 );

add_filter( 'excerpt_length', 'dwr_excerpt_length' );
function dwr_excerpt_length() {
	return 20;
}

add_filter( 'excerpt_more', 'dwr_excerpt_more' );
function dwr_excerpt_more() {
	return '&#8230;';
}

