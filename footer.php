		<footer class="site-footer">

			<!-- navigation menu -->
			<nav class="site-nav">
				<?php 			
					$args = array("theme_location" => "footer");
					wp_nav_menu($args); 
				?>
			</nav>

			<p>

				<?php bloginfo("name"); ?> - &copy; <?php echo date('Y'); ?>
				- Running on LAMP + custom Wordpress theme.
				

			</p>

		</footer>

	</div><!-- container -->

	<?php //NEEDED FOR PLUGINS ?>
	<?php //wp_footer(); ?>

	</body>

</html>