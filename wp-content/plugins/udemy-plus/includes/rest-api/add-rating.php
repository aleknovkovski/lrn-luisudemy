<?php

function up_rest_api_rating_handler($request) {
	$response = [ 'status' => 1 ];
	$params   = $request->get_json_params();

	if (
		!isset($params['rating'], $params['postID']) ||
		empty($params['rating']) ||
		empty($params['postID'])
	) {
		return $response;
	}

	$rating = round(floatval($params['rating']), 1);
	$postID = absint($params['postID']);
	$userID = get_current_user_id();

	global $wpdb;
	$wpdb->get_results(
		"SELECT * FROM {$wpdb->prefix}recipe_ratings
		WHERE post_id={$postID} AND user_id={$userID}"
	);

	$response['status'] = 2;
	return $response;
}