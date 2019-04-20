<?php
namespace inc\setup;

class Theme
{
	public function register()
	{
		add_action('after_setup_theme', [$this, 'theme_support']);
		add_action('pre_get_posts', [$this, 'modify_main_query']);
	}


	public function theme_support()
	{
		add_theme_support('post-thumbnails');
	}


	public function modify_main_query($query)
	{
		$query->query_vars['posts_per_page'] = 6;
	}
}
