<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<main id="main" role="main">
				<div class="narrow-container">
					<h1><?php the_archive_title(); ?></h1>

					<?php
					while (have_posts()) {
						the_post();
						get_template_part('components/content/content');
					}
					?>

					<div class="pagination-container">
						<?php
						echo paginate_links();
						?>
					</div>
				</div>
			</main>
		</div>
	</div>
</div>

<?php get_footer(); ?>