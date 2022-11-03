<?php

function up_save_post_recipe () {
    if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return;
    }
}