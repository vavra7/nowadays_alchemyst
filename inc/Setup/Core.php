<?php
namespace Inc\Setup;


class Core
{
	public function register()
	{
		add_filter('oembed_result', [$this, 'youtube_url_enable_js_api'], 10, 3);
	}

	
	public function youtube_url_enable_js_api($html, $url, $args)
	{
		if (strstr($html, 'youtube.com/embed/')) {
			$html = str_replace('?feature=oembed', '?feature=oembed&enablejsapi=1', $html);
		}

		return $html;
	}
}
