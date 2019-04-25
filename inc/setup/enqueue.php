<?php
namespace inc\setup;


class Enqueue
{
	public function register()
	{
		add_action('wp_enqueue_scripts', [$this, 'enqueue_frontend_assets']);
		add_action('wp_enqueue_scripts', [$this, 'enqueue_into_script']);
	}


	public function enqueue_frontend_assets()
	{
		wp_enqueue_style('main_style', get_template_directory_uri() . '/public/css/style.css', [], '1.0.0', 'all');
		wp_enqueue_style( 'na_icons', get_template_directory_uri() . '/public/fonts/nowadays_alchemyst_icon_font/style.css', [], '1.0.0', 'all');
		wp_enqueue_script('main_script', get_template_directory_uri() . '/public/js/script.js', [], '1.0.0', true);
	
	}


	public function enqueue_into_script()
	{
		global $wp_query;

		wp_localize_script('main_script', 'enqueuedData', [
			'ajaxUrl' => admin_url('admin-ajax.php'),
			'postsNum' => $wp_query->found_posts
		]);
	}
}
