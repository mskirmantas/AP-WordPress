	<!--  ================= Footer  =================  -->

<footer>
	<div class="container">
	
		<nav class="bottom-nav navigation">

			<?php 
				$menu_settings = [
					'menu_class' => 'btm-nav-links',
					'container' => false,
					'theme_location' => 'footer-navigation'
				];
				wp_nav_menu($menu_settings);
			?>

			<div class="lines line1"></div>
			<div class="copyright">
				<h6>&copy; Adventure Pixels 2019</h6>
			</div>
		</nav>

	</div>
</footer>