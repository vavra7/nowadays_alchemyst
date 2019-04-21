<?php
namespace inc\setup;

class Theme
{
	public function register()
	{
		add_action('after_setup_theme', [$this, 'theme_support']);
		add_action('after_setup_theme', [$this, 'theme_localization']);
	}


	public function theme_support()
	{
		add_theme_support('post-thumbnails');
	}


	public function theme_localization()
	{
		load_theme_textdomain('nowadays_alchemyst', get_template_directory() . '/localization');
	}
}
