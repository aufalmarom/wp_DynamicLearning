<!-- function of header on wp -->
<?php get_header(); ?>

<main>

	<?php
	/**
	 * @Author: Aufal Marom
	 * @Date:   2018-05-01 11:42:50
	 * @Last Modified by:   aufalmarom
	 * @Last Modified time: 2018-06-02 03:35:33
	 */
	?>

<?php
	// check post wordpress 
	if ( have_posts()):
		while ( have_posts()): 
			the_post ();  

		get_template_part('content', get_post_format());

		endwhile;
	else:
		echo 'Tidak ada Post';
	endif;
	?>

</main>

<!-- //function of footer on wp -->
<?php get_footer(); ?>


