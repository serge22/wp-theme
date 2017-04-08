<?php

add_action('after_setup_theme', 'theme_slug_setup');
function theme_slug_setup() {
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
}

add_action('wp_enqueue_scripts', 'theme_scripts');
function theme_scripts() {
	wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/css/lib.min.css', array(), '3.3.7');
	wp_enqueue_style('theme-style', get_stylesheet_uri(), array(), '040617');

	wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/js/js.min.js', array('jquery'), '022117', true);
}

