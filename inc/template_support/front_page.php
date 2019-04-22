<?php
namespace inc\template_support;

class Front_page
{
	public function register()
	{
		add_action('pre_get_posts', [$this, 'modify_main_query']);
		add_action('wp_ajax_load_more_posts', [$this, 'load_more_posts']);
		add_action('wp_ajax_nopriv_load_more_posts', [$this, 'load_more_posts']);
	}


	public function modify_main_query($query)
	{
		if (is_front_page()) {
			$query->query_vars['posts_per_page'] = 12;
		}
	}


	public function load_more_posts()
	{
		check_ajax_referer('load_more_posts', 'nonce', true);

		$requested_page = $_POST['requested_page'];
		$args = [
			'post_type' => 'post',
			'post_status' => 'publish',
			'posts_per_page' => 6,
			'paged' => $requested_page
		];
		$query = new \WP_Query($args);


		if ($query->have_posts()) {
			get_template_part('components/post_grid/become-alchemyst');
			while ($query->have_posts()) {
				$query->the_post();
				get_template_part('components/post_grid/grid-tile');
			}
		}

		wp_die();
	}
}
