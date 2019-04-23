<div class="<?php echo basename(__FILE__, '.php') ?> ar-1-1">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background-image: url(<?php echo wp_get_attachment_image_url(get_post_thumbnail_id(), 'large'); ?>);">
		<h1>
			<?php the_title(); ?>
		</h1>
		<?php
		inc\template_support\general::get_component('/components/post_grid/modal-window.php');
		?>
	</article>
</div>
