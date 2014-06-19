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

/**
 * @param int $columns
 *
 * @return bool
 */
function dwr_new_row( $columns = 3, $offset = 0 ) {
	global $wp_query;
	$current_iteration = $wp_query->current_post + 1;
	return ( $current_iteration != $offset && ( $current_iteration != $wp_query->post_count ) && ( ( $current_iteration - $offset ) % $columns ) == 0);
}

add_filter( 'pre_get_posts', 'dwr_set_per_page' );
function dwr_set_per_page( $query ) {
	if ( $query->is_main_query() && is_front_page() && $query->get( 'paged' ) < 2 ) {
		$query->set( 'posts_per_page', get_option( 'posts_per_page' ) + 1 );
	}
	return $query;
}