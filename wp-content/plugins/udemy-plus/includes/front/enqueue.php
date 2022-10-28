<?php

function up_enqueue_scripts() {
	$authURLs = json_encode([
		'signup' => esc_url_raw(rest_url('up/v1/signup'))
	]);
}