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


	public static function get_first_youtube_link(object $post) {
		if (!has_block('core-embed/youtube', $post->ID)) return;

		$extract_youtube_blocks = function (array $blocks) {
			return $blocks['blockName'] === 'core-embed/youtube';
		};

		$blocks = parse_blocks($post->post_content);
		$youtube_blocks = array_filter($blocks, $extract_youtube_blocks);
		$first_youtube_block = reset($youtube_blocks);

		
		return $first_youtube_block;
	}
}
