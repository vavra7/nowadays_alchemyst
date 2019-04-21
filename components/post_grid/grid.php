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

	<?php
	global $wp_query;
	$posts_num = $wp_query->found_posts;

	if ($posts_num > 12) {
		echo '<div class="load-more-container text-xs-center my-2">';
		inc\template_support\general::get_component('/components/partials/buttons/load-more.php');
		wp_nonce_field('load_more_posts', '__load_more_posts_nonce', false, true);
		echo '</div>';
	}
	?>
</div>