<?php
namespace Inc\GUI;

use Inc\Setup\Admin;


class Setup_GUI
{
	public $admin;


	public function register()
	{
		$this->admin = new Admin();

		add_action('admin_menu', [$this, 'add_settings_subpages']);
		add_action('admin_init', [$this, 'add_admin_settings']);
		add_action('admin_menu', [$this, 'add_admin_pages']);
	}


	public function add_admin_pages()
	{
		$admin_pages = $this->admin->get_admin_pages();

		foreach($admin_pages as $page) {
			add_menu_page($page['page_title'], $page['menu_title'], $page['capability'], $page['menu_slug'], $page['callback'], $page['icon_url'], $page['position']);
		}
	}


	public function add_settings_subpages()
	{
		$settings_subpages = $this->admin->get_settings_subpages();

		if (!empty($settings_subpages)) {
			foreach ($settings_subpages as $subpage) {
				add_options_page($subpage['page_title'], $subpage['menu_title'], $subpage['capability'], $subpage['menu_slug'], $subpage['callback']);
			}
		}
	}


	public function add_admin_settings()
	{
		$settings = $this->admin->get_settings();
		$sections = $this->admin->get_sections();
		$fields = $this->admin->get_fields();

		if (!empty($settings)) {
			foreach ($settings as $setting) {
				register_setting($setting['option_group'], $setting['option_name'], $setting['callback']);
			}
		}

		if (!empty($sections)) {
			foreach ($sections as $section) {
				add_settings_section($section['id'], $section['title'], $section['callback'], $section['page']);
			}
		}

		if (!empty($fields)) {
			foreach ($fields as $field) {
				add_settings_field($field["id"], $field['title'], $field["callback"], $field["page"], $field["section"], isset($field['args']) ? $field['args'] : null);
			}
		}
	}
}
