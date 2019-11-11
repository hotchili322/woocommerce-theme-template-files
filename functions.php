<?php

function load_stylesheets()
{
	wp_register_style('stylesheet', get_template_directory_uri(). '/style.css', '','', 'all');
	wp_enqueue_style('stylesheet');

	wp_register_style('custom', get_template_directory_uri(). '/app.css', '', '', 'all');
	wp_enqueue_style('custom');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_javascript()
{
	wp_register_script('custom', get_template_directory_uri(). '/app.js','jquery', '', 'true');
	wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'load_javascript');

add_theme_support('menus');