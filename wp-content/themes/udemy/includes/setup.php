<?php

function u_setup_theme(): void {
	add_theme_support( 'editor-styles' );

	add_editor_style([
		'assets/bootstrap-icons/bootstrap-icons.css',
		'assets/public/index.css',
		'https://fonts.googleapis.com/css2?family=Pacifico&family=Rubik:wght@300;400;500;700&display=swap'
	]);
}