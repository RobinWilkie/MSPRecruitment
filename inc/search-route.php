<?php 

add_action('rest_api_init', 'MSPregisterSearch');

function MSPregisterSearch(){
	register_rest_route('msp/v1', 'search', array(
		'methods' => WP_REST_Server::READABLE,
		'callback' => 'MSPsearchResults'
	));
}

function MSPsearchResults($data){
	$mainQuery = new WP_Query(array(
		'post_type' => array('page', 'jobs', 'news'),
		's' => sanitize_text_field($data['term'])
	));

	$results = array(
		'pageInfo' => array(),
		'jobs' => array(),
		'news' => array()
	);

	while($mainQuery->have_posts()){
		$mainQuery->the_post();

		if(get_post_type() == 'page'){
			array_push($results['pageInfo'], array(
			'title' => get_the_title(),
			'permalink' => get_the_permalink()
		));
		}

		if(get_post_type() == 'jobs'){
			array_push($results['jobs'], array(
			'title' => get_the_title(),
			'permalink' => get_the_permalink(),
			'postedOn' => get_the_time('j-n-y')
		));
		}

		if(get_post_type() == 'news'){
			array_push($results['news'], array(
			'title' => get_the_title(),
			'permalink' => get_the_permalink()
		));
		}
	}

	return $results;
}

 ?>