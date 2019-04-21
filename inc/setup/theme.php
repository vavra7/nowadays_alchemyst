<?php
namespace inc\setup;

class Theme
{
	public function register()
	{
		add_action('after_setup_theme', [$this, 'theme_support']);
	}


	public function theme_support()
	{
		add_theme_support('post-thumbnails');
	}
}
