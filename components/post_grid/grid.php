<div id="post-grid" class="<?php echo basename(__FILE__, '.php') ?>">
	<div class="post-container">
		<?php
		if (have_posts()) {
			$i = 1;

			while (have_posts()) {
				the_post();

				inc\template_support\general::get_component('/components/post_grid/grid-tile.php');

				if ($i === 6) {
					inc\template_support\general::get_component('/components/post_grid/become-alchemyst.php');
				}

				$i++;
			}
		}
		?>
	</div>
	<div class="load-more-container text-xs-center">
		<?php
		inc\template_support\general::get_component('/components/partials/buttons/load-more.php');
		?>
	</div>
</div>