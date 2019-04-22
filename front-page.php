<?php get_header() ?>

<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<main id="main">
				<?php
				inc\template_support\general::get_component('/components/post_grid/grid.php', true);
				?>
			</main>
		</div>
	</div>
</div>

<?php get_footer() ?>