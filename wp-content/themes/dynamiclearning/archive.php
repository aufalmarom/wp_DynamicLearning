<!-- mengatur output halaman archive berdasar kategori, author atau waktu -->

<!-- function of header on wp -->
<?php get_header(); ?>

<main>

	<?php
	/**
	 * @Author: Aufal Marom
	 * @Date:   2018-05-01 11:42:50
	 * @Last Modified by:   aufalmarom
	 * @Last Modified time: 2018-06-02 01:47:08
	 */
	?>

<?php
	// check post wordpress 
	if ( have_posts()): ?>

	<!-- sub judul -->
	<p class="sub_judul">
	<?php
		if (is_category()) {
			echo 'Halaman Kategori '; single_cat_title();
		}
		elseif (is_author()) {
			echo 'Halaman Author ' . get_the_author();
		}else{
			echo 'Halaman Arsip';
		}

		?>


	</p>
	 
		<?php 
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


