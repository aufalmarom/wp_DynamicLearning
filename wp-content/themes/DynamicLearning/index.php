<!-- function of header on wp -->
<?php get_header(); ?>

<main>

	<?php
	/**
	 * @Author: Aufal Marom
	 * @Date:   2018-05-01 11:42:50
	 * @Last Modified by:   aufalmarom
	 * @Last Modified time: 2018-05-04 00:17:12
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
	<!-- memberikan meta info berupa author, waktu, category dsb -->		
	<p class="info_meta">
		<!-- ini link yang mengarah ke ID penulis -->
		<a href=" <?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"> 
			<?php the_author(); ?> </a>
		<!-- format waktu bisa diliat di https://codex.wordpress.org/Formatting_Date_and_Time -->
			<?php echo ' || '; the_time('G:i'); echo ' || '; ?> <?php the_time('j F Y'); 
			echo ' || Kategori : '; the_category(', ');
		?>
	</p>

	<?php
		endwhile;
	else:
		echo 'Tidak ada Post';
	endif;
	?>

</main>

<!-- //function of footer on wp -->
<?php get_footer(); ?>


