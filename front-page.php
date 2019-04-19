<?php get_header() ?>

<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<h1>Front Page</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12">
			<?php
			inc\template_support\general::get_component('/components/post_grid/grid.php', true);
			?>
		</div>
	</div>
</div>

<?php get_footer() ?>