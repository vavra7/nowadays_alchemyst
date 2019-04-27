<div id="modal-<?php the_ID(); ?>" class="<?php echo basename(__FILE__, '.php'); ?> position-fixed">
	<div class="modal-header position-absolute">
		<i id="close-modal-button" class="na-icon-close" onclick="closeModalWindow()"></i>
	</div>

	<div class="modal-content pa-3">
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
		
			<span class="read-more"><a href="<?php echo esc_url(get_permalink()); ?>"><?php _e('read_more', 'nowadays_alchemyst'); ?></a></span>
		</p>


		<?php if (inc\template_support\general::has_youtube_block(get_post())) { ?>
			<div class="youtube-container ar-16-9 mt-2">
				<?php
				$youtube_url = inc\template_support\general::get_first_youtube_video(get_post());
				echo wp_oembed_get($youtube_url)
				?>
			</div>
		<?php }; ?>
	</div>
</div>