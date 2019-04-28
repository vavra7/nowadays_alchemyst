<?php
namespace Inc\Setup;


class Core
{
	public function register()
	{
		add_filter('oembed_result', [$this, 'youtube_url_enable_js_api'], 10, 3);
		add_filter('display_post_states', [$this, 'become_alchemyst_post_state'], 10, 2);
	}


	public function youtube_url_enable_js_api($html, $url, $args)
	{
		if (strstr($html, 'youtube.com/embed/')) {
			$html = str_replace('?feature=oembed', '?feature=oembed&enablejsapi=1', $html);
		}

		return $html;
	}


	public function become_alchemyst_post_state($states, $post)
	{
		if (get_option('page_become_alchemyst') == $post->ID) {
			$states['become_alchemyst_page'] = __('become_alchemyst_page', 'nowadays_alchemyst');
		}

		return $states;
	}
}
