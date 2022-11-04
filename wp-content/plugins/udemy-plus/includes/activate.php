<?php

function up_activate_plugin(){
	// 6.0 < 5.8
	if(version_compare(get_bloginfo('version'), '5.8', '<')) {
		wp_die(
			__('You must update WordPress to use this plugin.', 'udemy-plus')
		);
	}

	up_recipe_post_type();
	flush_rewrite_rules();

	$sql = "CREATE TABLE wp_recipe_ratings (
	ID bigint(20) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
	post_id bigint(20) unsigned NOT NULL,
	user_id bigint(20) unsigned NOT NULL,
	rating decimal(3,2) unsigned NOT NULL
	) ENGINE='InnoDB' COLLATE 'utf8mb4_unicode_ci'";
}