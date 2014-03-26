			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="wrap clearfix">

					<nav role="navigation">
							<?php bones_footer_links(); ?>
					</nav>

					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#menu-main-navigation').slicknav({
					'label' : '', // Label for menu button. Use an empty string for no label.
					'duplicate': true, // If true, the mobile menu is a copy of the original.
					'duration': true, // The duration of the sliding animation.
					'easingOpen': 'swing', // Easing used for open animations.
					'easingClose': 'swing', // Easing used for close animations.
					'prependTo': '#slickness', // Element, jQuery object, or jQuery selector string to prepend the mobile menu to.
					'parentTag': 'a', // Element type for parent menu items.
					'closeOnClick': false // Close menu when a link is clicked.
				});
			});
		</script>
		<?php wp_footer(); ?>

	</body>

</html>
