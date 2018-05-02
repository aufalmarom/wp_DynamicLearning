<?php

/**
 * @Author: aufalmarom
 * @Date:   2018-05-01 12:57:44
 * @Last Modified by:   aufalmarom
 * @Last Modified time: 2018-05-02 21:20:23
 */
?>

	<footer>

		<nav>
		<?php 
			// argumen berisi array, untuk munculin menu custom, dilempar ke function
			$args = array('theme_location' => 'footer_menu'); 
			wp_nav_menu($args); 
		?>
		</nav>		

		&copy; <?php bloginfo('name'); echo " " . date('Y'); ?>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>