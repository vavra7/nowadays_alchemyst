<?php
namespace inc\template_support;


class General
{
	public static function get_component(string $path, bool $once = false)
	{
		if (file_exists(get_template_directory() . $path)) {
			return load_template(get_template_directory() . $path, $once);
		}
	}
}
