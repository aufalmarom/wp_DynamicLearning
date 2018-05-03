<!-- file ini dipanggil untuk konten aja bro -->
<!-- function of header on wp -->
<?php get_header(); ?>

<main>

	<?php
	/**
	 * @Author: Aufal Marom
	 * @Date:   2018-05-01 11:42:50
	 * @Last Modified by:   aufalmarom
	 * @Last Modified time: 2018-05-03 23:57:28
	 */
	?>

<?php
	// check post wordpress 
	if ( have_posts()):
		while ( have_posts()): 
			the_post ();  
?>
			<!-- permalink for link to main page -->
		<h3><a href=" <?php the_permalink(); ?> "> <?php the_title(); ?> </a></h3>    
			<!-- seluruh konten -->
		<p> <?php	the_content(); ?></p> 

	<?php
		endwhile;
	else:
		echo 'Tidak ada Post';
	endif;
	?>

</main>

<!-- //function of footer on wp -->
<?php get_footer(); ?>


