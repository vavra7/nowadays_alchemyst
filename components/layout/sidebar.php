<aside id="main-sidebar" class="<?php echo basename(__FILE__, '.php'); ?> position-fixed display-flex flex-direction-column">
	<div class="top-bar pa-2 display-flex justify-content-space-between">
		<i id="menu-close-button" class="na-icon-close"></i>
		<?php
		Inc\Template_Support\General::get_component('/components/partials/buttons/switch-language.php');
		?>
	</div>

	<div class="main-area px-2">
		<div class="menu-container">
			<?php
			Inc\Template_Support\General::get_component('/components/layout/main-menu.php');
			?>
		</div>

		<div class="widget-area-container mt-3">
			<?php get_sidebar(); ?>
		</div>
	</div>
</aside>