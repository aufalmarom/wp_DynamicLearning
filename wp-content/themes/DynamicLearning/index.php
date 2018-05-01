<?php

//function of header on wp
get_header();

/**
 * @Author: Aufal Marom
 * @Date:   2018-05-01 11:42:50
 * @Last Modified by:   aufalmarom
 * @Last Modified time: 2018-05-01 12:59:28
 */

//check post wordpress
if ( have_posts()):
	while ( have_posts()): 
		the_post ();  ?> 
	<h2> <?php	the_title(); ?></h2>    
	<p> <?php	the_content(); ?></p> 
<?php
	endwhile;
else:
	echo 'Tidak ada Post';
endif;

//function of footer on wp
get_footer();

?>
