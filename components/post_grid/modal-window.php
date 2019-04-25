<div id="modal-<?php the_ID(); ?>" class="<?php echo basename(__FILE__, '.php'); ?> position-fixed pa-3">
	<i id="close-modal-button" class="na-icon-close position-absolute" onclick="closeModalWindow()"></i>

	<h2 class="title modal-title mt-1">
		<a class="modal-link" href="<?php echo esc_url(get_permalink()); ?>" rel="bookmark">
			<?php
			the_title();
			?>
		</a>
	</h2>

	<p class="excerpt modal-excerpt">
		<?php
		echo get_the_excerpt()
		?>
	</p>

	<div class="youtube-container ar-16-9 mt-2">
		<?php
		$youtube_url = inc\template_support\general::get_first_youtube_video(get_post());
		echo wp_oembed_get($youtube_url)
		?>
	</div>
</div>