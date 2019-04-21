<?php get_header() ?>

<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<h1>Front Page</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12">
			<main id="main">
				<?php
				inc\template_support\general::get_component('/components/post_grid/grid.php', true);
				?>
			</main><!-- #main -->
		</div>
	</div>
</div>

<?php get_footer() ?>