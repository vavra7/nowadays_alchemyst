<div class="wrap">
	<h1>
		<?php
		_e('nowadays_alchemyst_settings_title', 'nowadays_alchemyst');
		?>
	</h1>


	<form method="post" action="options.php">
		<?php
		settings_fields('general_settings');
		do_settings_sections('nowadays-alchemyst');
		submit_button();
		?>
	</form>
</div>