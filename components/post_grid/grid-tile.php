<div class="<?php echo basename(__FILE__, '.php') ?> ar-1-1">
	<article id="post-<?php the_ID(); ?>" <?php post_class('background-size-cover background-position-center display-flex justify-content-center align-items-center cursor-pointer'); ?> style="background-image: url(<?php echo wp_get_attachment_image_url(get_post_thumbnail_id(), 'large'); ?>);">
		<h1 class="grid-tile-title <?php if (has_post_thumbnail()) {echo 'display-none';} ?>">
			<?php the_title(); ?>
		</h1>

		<?php
		Inc\Template_Support\General::get_component('/components/post_grid/modal-window.php');
		?>
	</article>
</div>