<div id="modal-<?php the_ID(); ?>" class="<?php echo basename(__FILE__, '.php'); ?> position-fixed">
	<i id="close-modal-button" class="na-icon-close position-absolute" onclick="closeModalWindow()"></i>

	<h2 class="entry-title">
		<a href="<?php echo esc_url(get_permalink()); ?>" rel="bookmark">
			<?php
			the_title();
			?>
		</a>
	</h2>

	<p>
		<?php
		the_excerpt();
		?>
	</p>

	<div class="youtube-container">
		<?php
		$youtube_url = inc\template_support\general::get_first_youtube_video(get_post());
		echo wp_oembed_get($youtube_url)
		?>
	</div>
</div>