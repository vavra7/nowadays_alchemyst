<header id="main-header" class="<?php echo basename(__FILE__, '.php'); ?> mt-2 mb-4">
	<div class="container">
		<div class="row header-container">
			<div class="col-xs-12 col-md-3 col-lg-4 description-container mt-2 align-items-flex-end">
				<?php echo get_bloginfo('description'); ?>
			</div>

			<div class="col-xs-12 col-md-6 col-lg-4 flex-direction-column	align-items-center justify-content-flex-end">
				<div class="logo-container text-align-center">
					<a href="<?php echo home_url(); ?>">
						<img src="<?php echo get_site_icon_url(200); ?>" alt="logo">
					</a>
				</div>

				<div class="site-name text-align-center mt-1">
					<a href="<?php echo home_url(); ?>">
						<h1 class="ma-0 fs-6">
							<?php echo get_bloginfo('name'); ?>
						</h1>
					</a>
				</div>
			</div>

			<div class="col-xs-12 col-md-3 col-lg-4 justify-content-flex-end">
				<div class="header-menu-container display-flex flex-direction-column justify-content-space-between align-items-flex-end">
					<div class="switch-language-container">
						<?php
						Inc\Template_Support\General::get_component('/components/partials/buttons/switch-language.php');
						?>
					</div>
					<i id="menu-toggle-button" class="na-icon-navicon menu-button mt-2"></i>
				</div>
			</div>
		</div>
	</div>
</header>