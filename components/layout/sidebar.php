<aside id="main-sidebar" class="<?php echo basename(__FILE__, '.php'); ?> position-fixed display-flex flex-direction-column">
	<div class="top-bar pa-2 display-flex justify-content-space-between">
		<i id="menu-close-button" class="na-icon-close"></i>
		<?php
		inc\template_support\general::get_component('/components/partials/buttons/switch-language.php');
		?>
	</div>

	<div class="main-area px-2">
		<div class="menu-container">
			<?php
			inc\template_support\general::get_component('/components/layout/main-menu.php');
			?>
		</div>

		<div class="widget-area-container mt-2">
			Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit obcaecati culpa nulla in voluptatum suscipit, ipsum sunt earum quae adipisci consectetur illum cumque libero maxime molestias tenetur eaque porro saepe veniam aspernatur reprehenderit? Accusamus voluptate nihil facere quis voluptates! Aliquam magnam saepe quod? Molestiae corrupti delectus doloribus consequuntur ullam nostrum!
		</div>
	</div>
</aside>