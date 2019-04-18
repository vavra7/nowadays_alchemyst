<?php
namespace Inc\Setup;


class Enqueue
{
	public function register()
	{
		add_action('wp_enqueue_scripts', [$this, 'enqueue_frontend_assets']);
	}

	public function enqueue_frontend_assets()
	{
		// css
		wp_enqueue_style('main_style', get_template_directory_uri() . '/public/css/style.css', [], '1.0.0', 'all');

		//js
		wp_enqueue_script('main_script', get_template_directory_uri() . '/public/js/script.js', [], '1.0.0', true);
	}
}
