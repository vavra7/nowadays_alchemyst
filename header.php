<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>
		<?php
		bloginfo('name');
		wp_title('|');
		?>
	</title>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page">
		<div id="page-overlay" class="position-fixed"></div>
		<?php
		Inc\Template_Support\General::get_component('/components/layout/sidebar.php', true);
		Inc\Template_Support\General::get_component('/components/layout/header.php', true);
		?>
		<div id="site-content">