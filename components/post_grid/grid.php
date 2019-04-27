<div id="post-grid" class="<?php echo basename(__FILE__, '.php') ?>">
	<div class="post-container">
		<?php
		$args = [
			'post_type' => 'post',
			'post_status' => 'publish',
			'posts_per_page' => 12
		];
		$query = new \WP_Query($args);



		if ($query->have_posts()) {
			$i = 1;

			while ($query->have_posts()) {
				$query->the_post();

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
		echo '<div class="load-more-container text-align-center my-2">';
		inc\template_support\general::get_component('/components/partials/buttons/load-more.php');
		wp_nonce_field('load_more_posts', '__load_more_posts_nonce', false, true);
		echo '</div>';
	}
	?>
</div>