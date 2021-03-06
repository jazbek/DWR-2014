<?php
function FoundationPress_theme_support() {
    // Add language support
    load_theme_textdomain('FoundationPress', get_template_directory() . '/languages');

    // Add menu support
    add_theme_support('menus');

    // Add post thumbnail support: http://codex.wordpress.org/Post_Thumbnails
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size( 214, 214, true );
	add_image_size( 'large', 1066, 662, true );
	add_image_size( 'medium', 640, 397, true );

    // rss thingy
    add_theme_support('automatic-feed-links');

    // Add post formarts support: http://codex.wordpress.org/Post_Formats
    add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

	add_theme_support( 'html5', array('caption') );

}

add_action('after_setup_theme', 'FoundationPress_theme_support'); 
?>