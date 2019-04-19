<div id="post-grid" class="<?php echo basename(__FILE__, '.php') ?>">
	<?php
	if (have_posts()) {
		while (have_posts()) {
			the_post();
			inc\template_support\general::get_component('/components/post_grid/grid-tile.php');
		}
	}
	?>
</div>