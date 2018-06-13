<?php 

require get_theme_file_path('/inc/search-route.php');

function msp_custom_rest(){
	register_rest_field('post', 'authorName', array(
		'get_callback' => function() {return get_the_author();}
	));
}

add_action('rest_api_init', 'msp_custom_rest');

/* import files */
function msp_files(){
	wp_enqueue_script('msp_main_javascript', get_theme_file_uri('/js/scripts-bundled.js'), array('jquery'), '1.0', true); /* last two are version number and placement at end of file */
	wp_enqueue_style('msp_customfonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
	wp_enqueue_style('msp_fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style('msp_main_styles', get_stylesheet_uri());
	wp_localize_script('msp_main_javascript', 'MSPData', array(
		'root_url' => get_site_url()
	));
}


add_action('wp_enqueue_scripts','msp_files');

function msp_features(){
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_image_size('newsThumbnail', 400, 260, true);
	register_sidebar();
}

add_action('after_setup_theme', 'msp_features');

/**
 * Register our sidebars and widgetized areas.
 *
 */
function ogdirections_widgets_init() {

	register_sidebar( array(
		'name'          => 'direction sidebar',
		'id'            => 'ogd_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'ogdirections_widgets_init' );