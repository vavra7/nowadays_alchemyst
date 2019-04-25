<?php
namespace inc;


final class init
{
	public static function get_services()
	{
		return [
			setup\core::class,
			setup\theme::class,
			setup\enqueue::class,
			setup\gutenberg::class,
			template_support\front_page::class
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
