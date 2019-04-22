<nav id="main-nav" class="<?php echo basename(__FILE__, '.php'); ?>">
	<?php
		wp_nav_menu([
			'container' => '',
			'theme_location' => 'main_menu'
		]);
	?>
</nav>