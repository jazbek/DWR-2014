<?php

if (!function_exists('FoundationPress_scripts')) :
  function FoundationPress_scripts() {

	  // deregister the jquery version bundled with wordpress

	  if ( ! is_admin() ) {
		  wp_deregister_script( 'jquery' );
		  wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery/dist/jquery.min.js', array(), '1.0.0', false );
	  }

	  // register scripts
	  wp_register_script( 'modernizr', get_template_directory_uri() . '/js/modernizr/modernizr.min.js', array(), '1.0.0', false );
	  wp_register_script(
		  'foundation', get_template_directory_uri() . '/js/app.js', array(
			  'jquery',
			  'jsticky',
			  'slick',
			  'mediaCheck',
		  ), '1.0.0', true
	  );
	  wp_register_script( 'scroll-to-fixed', get_template_directory_uri() . '/js/ScrollToFixed/jquery-scrolltofixed-min.js', array( 'jquery' ), '1.0.6', true );
	  wp_register_script( 'jquery-waypoints', get_template_directory_uri() . '/js/jquery-waypoints/waypoints.min.js', array( 'jquery' ), '2.0.5', true );
	  wp_register_script( 'jsticky', get_template_directory_uri() . '/js/jSticky/jquery.jsticky.js', array( 'jquery' ), '1', true );
	  wp_register_script( 'slick', get_template_directory_uri() . '/js/slick/slick.min.js', array(), '1.3.6', true );
	  wp_register_script( 'mediaCheck', get_template_directory_uri() . '/js/mediaCheck/js/mediaCheck-min.js', array(), '0.4.4', true );

	  // enqueue scripts
	  wp_enqueue_script( 'modernizr' );
	  wp_enqueue_script( 'jquery' );
	  wp_enqueue_script( 'foundation' );
	  wp_enqueue_script( 'jsticky' );
	  wp_enqueue_script( 'slick' );

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