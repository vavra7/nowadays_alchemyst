<article id="post-<?php the_ID(); ?>" <?php post_class(basename(__FILE__, '.php')); ?>>
	<header class="single-header">
		<?php
		if (has_post_thumbnail()) {
			echo '<div class="single-featured ar-16-9">';
			the_post_thumbnail();
			echo '</div>';
		};
		?>

		<h1 class="single-title">
			<?php the_title(); ?>
		</h1>
	</header>

	<div class="single-content">
		<?php the_content(); ?>
	</div>

	<div class="post-navigation display-flex justify-content-space-between mt-3">
		<div class="post-link-prev">
			<?php previous_post_link('%link', '<i class="na-icon-arrow-left"></i> ' . __('prev_post', 'nowadays_alchemyst')); ?>
		</div>
		<div class="post-link-next">
			<?php next_post_link('%link', __('next_post', 'nowadays_alchemyst')  . ' <i class="na-icon-arrow-right"></i>'); ?>
		</div>
	</div>
</article>