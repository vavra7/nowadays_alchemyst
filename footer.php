		</div><!-- #site-content -->

		<footer id="site-footer" class="my-4">
			<div class="container pt-4 footer-container">
				<div class="row">
					<div class="col-xs-12 col-sm-4 justify-content-center">
						<div class="widget-area footer-column-1">
							<?php dynamic_sidebar('footer_column_1'); ?>
						</div>
					</div>

					<div class="col-xs-12 col-sm-4 footer-column-2">
						<div class="icon-wrapper">
							<i class="na-icon-facebook-square"></i>
							<i class="na-icon-instagram"></i>
							<i class="na-icon-youtube-play"></i>
						</div>

						<div class="footer-logo">
							<img src="<?php echo get_site_icon_url(150); ?>" alt="logo">
						</div>
					</div>

					<div class="col-xs-12 col-sm-4 justify-content-center">
						<div class="widget-area footer-column-3">
							<?php dynamic_sidebar('footer_column_3'); ?>
						</div>
					</div>
				</div>
			</div>
		</footer>
		</div><!-- #page -->
		<?php wp_footer() ?>
		</body>

		</html>