<?php
namespace inc\template_support;

class Front_page
{
	public function register()
	{
		add_action('pre_get_posts', [$this, 'modify_main_query']);
	}


	public function modify_main_query($query)
	{
		if (is_front_page()) {
			$query->query_vars['posts_per_page'] = 12;
		}
	}
}
