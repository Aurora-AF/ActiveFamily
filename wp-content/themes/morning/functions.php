<?php



function ct_morning_register_scripts(){

	// register Google Fonts typefaces & styles
	wp_register_style( 'ct-morning-google-fonts', '//fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,700');

	// dequeue Apex Google Fonts
	wp_dequeue_style('ct-apex-google-fonts');

	// enqueue Google Fonts
	wp_enqueue_style('ct-morning-google-fonts');
}
add_action('wp_enqueue_scripts', 'ct_morning_register_scripts', 99 );