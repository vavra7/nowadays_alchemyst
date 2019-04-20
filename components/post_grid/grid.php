<div id="post-grid" class="<?php echo basename(__FILE__, '.php') ?>">
	<?php
	if (have_posts()) {
		$i = 1;

		while (have_posts()) {
			the_post();

			inc\template_support\general::get_component('/components/post_grid/grid-tile.php');

			if ($i % 6 === 0) {
				inc\template_support\general::get_component('/components/post_grid/become-alchemyst.php');
			}

			$i++;
		}
	}
	?>
</div>