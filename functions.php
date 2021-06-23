<?php

// ajout de fonctions au thème
add_theme_support( 'post_title' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );

//ajout du style et des scripts
function register_assets(){

	wp_enqueue_script(
		'wordpress',
		'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js'
	);

    wp_enqueue_style(
		'woo-commerce',
		get_stylesheet_uri(),
		array(),
		'1.0'
	);

/*     style que je n'ai pas dans mon truc mais qui existe chez tiavina et son theme trafalgar
		on peut faire pareil avec les scripts

	wp_enqueue_style(
		'trafalgar-custom-css',
		get_template__directory_uri().'/styles/main.css',
		array(),
		'1.0'
	); 

	dans main.css on peut écrire :
	body{
		background-color : ###### !important;
	}
	
*/

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