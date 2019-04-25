<?php
namespace inc\setup;

class Theme
{
	public function register()
	{
		add_action('after_setup_theme', [$this, 'theme_support']);
		add_action('after_setup_theme', [$this, 'theme_localization']);
		add_action('after_setup_theme', [$this, 'register_menus']);
		add_filter( 'excerpt_length', [$this, 'excerpt_lenght']);
		add_filter( 'excerpt_more', [$this, 'excerpt_end']);
	}


	public function theme_support()
	{
		add_theme_support('post-thumbnails');
	}


	public function theme_localization()
	{
		load_theme_textdomain('nowadays_alchemyst', get_template_directory() . '/localization');
	}


	public function register_menus()
	{
		register_nav_menus([
			'main_menu' => __('sidebar_main_menu', 'nowadays_alchemyst')
		]);
	}


	public function excerpt_lenght()
	{
		return 100;
	}


	public function excerpt_end()
	{
		return '...';
	}
}
