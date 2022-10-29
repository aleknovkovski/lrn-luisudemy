<?php

function up_rest_api_signin_handler($request) {
	$response = ['status' => 1];
	$params = $request->get_json_params();

	$valuesNotSet = !isset($params['user_login'], $params['password']);
	$userLoginIsEmpty = empty($params['user_login']);
	$passwordIsEmpty = empty($params['password']);

	if($valuesNotSet || $userLoginIsEmpty || $passwordIsEmpty) {
		return $response;
	}

	$response['status'] = 2;
	return $response;
}