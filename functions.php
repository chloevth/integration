<?php

// ajout de fonctions au thème
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );

//ajout du style et des scripts
function register_assets(){
    wp_enqueue_style('acs', get_stylesheet_uri(), array(), '1.0');
}
add_action('wp_enqueue_scripts','register_assets');

// prise en charge du logo du site
function custom_logo() {
	add_theme_support('custom-logo', array(
		'flex-height' => true,
		'flex-width'  => true,
	));
}
add_action('after_setup_theme','custom_logo');