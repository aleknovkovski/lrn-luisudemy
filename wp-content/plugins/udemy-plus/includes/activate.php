<?php

function up_activate_plugin(){
	up_recipe_post_type();
	flush_rewrite_rules();
}