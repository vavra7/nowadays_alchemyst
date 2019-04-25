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
</article>