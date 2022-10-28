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

	$usernameExists = username_exists($username);
	$notAnEmail = !is_email($email);
	$emailExists = email_exists($email);

	if( $usernameExists || $notAnEmail || $emailExists ) {
		$response['status'] = "2: Either the username or email is duplicate, or the email is in the wrong format";
		return $response;
	}

	$userID = wp_insert_user([
		'user_login' => $username,
		'user_pass' => $password,
		'user_email' => $email
	]);

	if (is_wp_error($userID)) {
		return $response; //$userID will be a wp_error if something went wrong
	}

	$response['status'] = 2;
	return $response;
}