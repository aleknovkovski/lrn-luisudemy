<?php

function up_rest_api_signup_handler($request) {
	$response = ['status' => 1];
	$params = $request->get_json_params();

	$valuesNotSet = !isset($params['email'], $params['password'], $params['username']);
	$emptyEmail = empty($params['email']);
	$emptyPassword = empty($params['password']);
	$emptyUsername = empty($params['username']);

	if( $valuesNotSet || $emptyEmail || $emptyPassword || $emptyUsername ) {
		return $response;
	}

	$email = sanitize_email($params['email']);
	$username = sanitize_text_field($params['username']);
	$password = sanitize_text_field($params['password']);

	if(
		username_exists($username) ||
		!is_email($email) ||
		email_exists($email)
	) {
		return $response;
	}

	$response['status'] = 2;
	return $response;
}