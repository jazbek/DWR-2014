<?php

/**
 * Register Menus
 * http://codex.wordpress.org/Function_Reference/register_nav_menus#Examples
 */
register_nav_menus(array(
    'main-menu' => 'Main Menu',
    'mobile-off-canvas' => 'Mobile'
));


/**
 * Left top bar
 * http://codex.wordpress.org/Function_Reference/wp_nav_menu
 */
function foundationPress_top_bar_l() {
	wp_nav_menu(array(
			'container' => false,                           // remove nav container
			'container_class' => '',                        // class of container
			'menu' => '',                                   // menu name
			'menu_class' => 'top-bar-menu left',            // adding custom nav class
			'theme_location' => 'top-bar-l',                // where it's located in the theme
			'before' => '',                                 // before each link <a>
			'after' => '',                                  // after each link </a>
			'link_before' => '',                            // before each link text
			'link_after' => '',                             // after each link text
			'depth' => 5,                                   // limit the depth of the nav
			'fallback_cb' => false,                         // fallback function (see below)
			'walker' => new top_bar_walker()
		));
}

/**
 * Left top bar
 * http://codex.wordpress.org/Function_Reference/wp_nav_menu
 */
function foundationPress_main_menu() {
	wp_nav_menu(array(
			'container' => false,                           // remove nav container
			'container_class' => '',                        // class of container
			'menu' => '',                                   // menu name
			'menu_class' => 'inline-list text-center',            		// adding custom nav class
			'theme_location' => 'main-menu',                // where it's located in the theme
			'before' => '',                                 // before each link <a>
			'after' => '',                                  // after each link </a>
			'link_before' => '',                            // before each link text
			'link_after' => '',                             // after each link text
			'depth' => 5,                                   // limit the depth of the nav
			'fallback_cb' => false,                         // fallback function (see below)
			//        'walker' => new top_bar_walker()
		));
}

/**
 * Right top bar
 */
function foundationPress_top_bar_r() {
    wp_nav_menu(array( 
        'container' => false,                           // remove nav container
        'container_class' => '',                        // class of container
        'menu' => '',                                   // menu name
        'menu_class' => 'top-bar-menu right',           // adding custom nav class
        'theme_location' => 'top-bar-r',                // where it's located in the theme
        'before' => '',                                 // before each link <a> 
        'after' => '',                                  // after each link </a>
        'link_before' => '',                            // before each link text
        'link_after' => '',                             // after each link text
        'depth' => 5,                                   // limit the depth of the nav
        'fallback_cb' => false,                         // fallback function (see below)
        'walker' => new top_bar_walker()
    ));
}

/**
 * Mobile off-canvas
 */
function foundationPress_mobile_off_canvas() {
    wp_nav_menu(array( 
        'container' => false,                           // remove nav container
        'container_class' => '',                        // class of container
        'menu' => '',                                   // menu name
        'menu_class' => 'off-canvas-list',              // adding custom nav class
        'theme_location' => 'mobile-off-canvas',        // where it's located in the theme
        'before' => '',                                 // before each link <a> 
        'after' => '',                                  // after each link </a>
        'link_before' => '',                            // before each link text
        'link_after' => '',                             // after each link text
        'depth' => 5,                                   // limit the depth of the nav
        'fallback_cb' => false,                         // fallback function (see below)
        'walker' => new top_bar_walker()
    ));
}

?>