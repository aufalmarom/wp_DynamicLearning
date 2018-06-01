<?php

/**
 * @Author: aufalmarom
 * @Date:   2018-05-01 12:57:29
 * @Last Modified by:   aufalmarom
 * @Last Modified time: 2018-06-02 03:27:18
 */
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<!-- title dinamis -->
	<title><?php bloginfo('name');?> </title>
	<!-- informasi header, load script css, js atau plugin -->
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<!-- link dinamis -->
		<h1><a href="<?php echo home_url() ?>"> <?php bloginfo('name');?> </a></h1>
		<!-- deskripsi/tagline blog -->
		<h2><?php bloginfo('description') ?></h2>
		<nav>
		<?php 
			// argumen berisi array, untuk munculin menu custom, dilempar ke function
			$args = array('theme_location' => 'main_menu'); 
			wp_nav_menu($args); 
		?>
		</nav>

		<div id="search_submit">
			<?php get_search_form(); ?>
		</div>

		<div class="clear"></div>
	</header>