<?php
namespace Inc;


final class Init
{
	public static function get_services()
	{
		return [
			Setup\Core::class,
			Setup\Theme::class,
			Setup\Enqueue::class,
			Setup\Gutenberg::class,
			GUI\Setup_GUI::class,
			Template_Support\Front_Page::class
		];
	}


	private static function instantiate($class)
	{
		return new $class();
	}


	public static function register_services()
	{
		foreach (self::get_services() as $class) {
			$service = self::instantiate($class);
			if (method_exists($service, 'register')) {
				$service->register();
			}
		}
	}
}
