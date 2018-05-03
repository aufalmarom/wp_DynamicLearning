<!-- function of header on wp -->
<?php get_header(); ?>

<main>

	<?php
	/**
	 * @Author: Aufal Marom
	 * @Date:   2018-05-01 11:42:50
	 * @Last Modified by:   aufalmarom
	 * @Last Modified time: 2018-05-03 23:56:03
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
			<!-- excerpt : mengambil otomatis beberapa kata, buat see more berupa [...] -->
			<!-- permalink buat ke link postnya --> 
		<p> <?php echo get_the_excerpt(); ?>  <a href=" <?php the_permalink(); ?>">baca terus ... :) </a></p> 			
			
			

	<?php
		endwhile;
	else:
		echo 'Tidak ada Post';
	endif;
	?>

</main>

<!-- //function of footer on wp -->
<?php get_footer(); ?>


