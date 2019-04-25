<?php get_header(); ?>

<div class="container mt-4">
	<div class="row">
		<div class="col-xs-12">
			<main id="main" role="main">
				<?php
				while (have_posts()) {
					the_post();
					get_template_part('components/single/single');
				}
				?>
			</main>
		</div>
	</div>
</div>

<?php get_footer(); ?>