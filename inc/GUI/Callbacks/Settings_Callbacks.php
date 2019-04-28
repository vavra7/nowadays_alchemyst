<?php
namespace Inc\GUI\Callbacks;

class Settings_Callbacks
{
	public function na_settings_page()
	{
		if (file_exists(get_template_directory() . '/components/admin/na-settings.php')) {
			return load_template(get_template_directory() . '/components/admin/na-settings.php', true);
		}
	}


	public function choose_become_alchemyst_page($args)
	{
		$exclude = [
			get_option('page_for_posts'),
			get_option('page_on_front')
		];
		$post_args = [
			'exclude' => $exclude,
			'number' => 0,
			'post_type' => 'page'
		];
		$posts = get_pages($post_args);
		$selected = get_option($args['name']);

		echo '<select id="' . $args['label_for'] . '" name="' . $args['name'] . '" id="become-alchemyst-select">';
		echo '<option value="0" ' . selected(0, $selected) . '>' . __('dropdown_select', 'nowadays_alchemyst') . '</option>';
		foreach ($posts as $post) {
			echo '<option value="' . $post->ID . '" ' . selected($post->ID, $selected) . '>' . $post->post_title . '</option>';
		}
		echo '</select>';
	}


	public function tesc_input()
	{
		$test_value = get_option('test_option');
		echo '<input type="text" class="regular-text" name="test_option" value="'.$test_value.'" placeholder="First Name" />';
	}
}
