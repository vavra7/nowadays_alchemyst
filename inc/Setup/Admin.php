<?php
namespace Inc\Setup;

use Inc\GUI\Callbacks\Settings_Callbacks;


class Admin
{
	public $callbacks;
	public $settings;


	public function __construct()
	{
		$this->callbacks = new Settings_Callbacks();
	}


	public function get_settings_subpages()
	{
		$subpages = [
			[
				'page_title' => 'NA Settings',
				'menu_title' => 'Nowadays Alchemyst',
				'capability' => 'manage_options',
				'menu_slug' => 'nowadays-alchemyst',
				'callback' => [$this->callbacks, 'na_settings_page']
			]
		];

		return $subpages;
	}


	public function get_settings()
	{
		$settings = [
			[
				'option_group' => 'general_settings',
				'option_name' => 'page_become_alchemyst',
				'callback' => function ($input) {
					return $input;
				}
			]
		];

		return $settings;
	}


	public function get_sections()
	{
		$sections = [
			[
				'id' => 'general_section',
				'title' => '',
				'callback' => function () { },
				'page' => 'nowadays-alchemyst'
			]
		];

		return $sections;
	}


	public function get_fields()
	{
		$fields = [
			[
				'id' => 'page_become_alchemyst',
				'title' => __('become_alchemyst_page', 'nowadays_alchemyst'),
				'callback' => [$this->callbacks, 'choose_become_alchemyst_page'],
				'page' => 'nowadays-alchemyst',
				'section' => 'general_section',
				'args' => [
					'label_for' => 'page-become-alchemyst',
					'name' => 'page_become_alchemyst'
				]
			]
		];

		return $fields;
	}
}
