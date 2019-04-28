<?php
namespace Inc\Setup;

class Gutenberg
{
	public function register()
	{
		add_action('after_setup_theme', [$this, 'gutenberg_enqueue']);
	}


	public function gutenberg_enqueue()
	{
		add_theme_support('wp-block-styles');
		add_theme_support('responsive-embeds');
	}
}
