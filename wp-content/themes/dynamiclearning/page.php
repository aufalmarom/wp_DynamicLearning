<?php

/**
 * @Author: aufalmarom
 * @Date:   2018-06-02 02:54:40
 * @Last Modified by:   aufalmarom
 * @Last Modified time: 2018-06-02 02:59:38
 */
?>
<?php get_header(); ?>

<main id="main-page">

<?php
	// check post wordpress 
	if ( have_posts()):
		while ( have_posts()): 
			the_post ();  

		get_template_part('content');

		endwhile;
	else:
		echo 'Tidak ada Post';
	endif;
	?>

</main>

<!-- //function of footer on wp -->
<?php get_footer(); ?>