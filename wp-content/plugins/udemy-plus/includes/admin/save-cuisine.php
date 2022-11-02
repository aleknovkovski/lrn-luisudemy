<?php

function up_save_cuisine_meta($term_id) {
	if(!isset($_POST['up_more_info_url'])) {
		return;
	}
	update_term_meta(
		$term_id,
		'more_info_url',
		sanitize_url($_POST['up_more_info_url'])
	);
}
