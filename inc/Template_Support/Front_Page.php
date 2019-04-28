<?php
namespace Inc\Template_Support;

class Front_Page
{
	public function register()
	{
		add_action('wp_ajax_load_more_posts', [$this, 'load_more_posts']);
		add_action('wp_ajax_nopriv_load_more_posts', [$this, 'load_more_posts']);
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
