<?php

function up_save_post_recipe ($post_id) {
    if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return;
    }
}