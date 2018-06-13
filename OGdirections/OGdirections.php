<?php
/*
Plugin Name: OGdirections
Plugin URI: http://msp-recruitment-solutions.local/
Description: directions to locations
Version: 1.0.0
Author: Robin Wilkie
Author URI: http://health-check-team.example.com
*/

// Exit if accessed directly
if (!defined('ABSPATH')) {
	exit;
}

// load scripts
require_once(plugin_dir_path(__FILE__).'/includes/OGdirections-scripts.php');

// load scripts
require_once(plugin_dir_path(__FILE__).'/includes/OGdirections-class.php');

// register widget
function register_ogdirections(){
	register_widget( 'OG_directions_Widget' );
}

//hook in function
add_action( 'widgets_init', 'register_ogdirections' );