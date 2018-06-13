<?php 
//add scripts
function ogd_add_scripts(){
	//add main css
	wp_enqueue_style( 'ogd-main-style', plugins_url(). '/OGdirections/css/styles.css' );
	//add main js
	wp_enqueue_script( 'ogd-main-script', plugins_url(). '/OGdirections/js/main.js' );
}

add_action('wp_enqueue_scripts', 'ogd_add_scripts');


?>