<?php

if (!function_exists('FoundationPress_scripts')) :
  function FoundationPress_scripts() {

    // deregister the jquery version bundled with wordpress
    wp_deregister_script( 'jquery' );

    // register scripts
    wp_register_script( 'modernizr', get_template_directory_uri() . '/js/modernizr/modernizr.min.js', array(), '1.0.0', false );
    wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery/dist/jquery.min.js', array(), '1.0.0', false );
    wp_register_script( 'foundation', get_template_directory_uri() . '/js/app.js', array('jquery', 'jsticky'), '1.0.0', true );
	  wp_register_script( 'scroll-to-fixed', get_template_directory_uri() . '/js/ScrollToFixed/jquery-scrolltofixed-min.js', array('jquery'), '1.0.6', true );
	  wp_register_script( 'jquery-waypoints', get_template_directory_uri() . '/js/jquery-waypoints/waypoints.min.js', array('jquery'), '2.0.5', true );
	  wp_register_script( 'jsticky', get_template_directory_uri() . '/js/jSticky/jquery.jsticky.js', array('jquery'), '1', true );

	  // enqueue scripts
	  wp_enqueue_script('modernizr');
	  wp_enqueue_script('jquery');
	  wp_enqueue_script('foundation');
	  wp_enqueue_script('jsticky');

  }

  add_action( 'wp_enqueue_scripts', 'FoundationPress_scripts' );
endif;

function kitchensink_scripts() {
  if ( is_page_template('kitchen-sink.php') ) {

    wp_enqueue_script( 'kitchen-sink', get_template_directory_uri() . '/js/kitchen-sink.js', array('jquery'), '1.0.0', true );

  }
}

add_action( 'wp_enqueue_scripts', 'kitchensink_scripts' );


?>