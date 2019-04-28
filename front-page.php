<?php get_header() ?>

<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<main id="main">
				<?php
				Inc\Template_Support\General::get_component('/components/post_grid/grid.php', true);
				?>
			</main>
		</div>
	</div>
</div>

<?php get_footer() ?>