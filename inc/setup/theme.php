<?php
namespace inc\setup;

class Theme
{
	public function register()
	{
		add_action('widgets_init', [$this, 'register_sidebars']);
		add_action('after_setup_theme', [$this, 'theme_support']);
		add_action('after_setup_theme', [$this, 'theme_localization']);
		add_action('after_setup_theme', [$this, 'register_menus']);
		add_filter('excerpt_length', [$this, 'excerpt_lenght']);
		add_filter('excerpt_more', [$this, 'excerpt_end']);
	}


	public function register_sidebars()
	{
		register_sidebar([
			'name' => __('sidebar_area', 'nowadays_alchemyst'),
			'id' => 'sidebar_area',
			'description' => __('sidebar_area_description', 'nowadays_alchemyst'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<div class="widget-title-wrapper"><h3 class="widget-title">',
			'after_title' => '</h3></div>',
		]);

		register_sidebar([
			'name' => __('footer_column_1', 'nowadays_alchemyst'),
			'id' => 'footer_column_1',
			'description' => __('footer_column_1_description', 'nowadays_alchemyst'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<div class="widget-title-wrapper"><h3 class="widget-title">',
			'after_title' => '</h3></div>',
		]);

		register_sidebar([
			'name' => __('footer_column_3', 'nowadays_alchemyst'),
			'id' => 'footer_column_3',
			'description' => __('footer_column_3_description', 'nowadays_alchemyst'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<div class="widget-title-wrapper"><h3 class="widget-title">',
			'after_title' => '</h3></div>',
		]);
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
