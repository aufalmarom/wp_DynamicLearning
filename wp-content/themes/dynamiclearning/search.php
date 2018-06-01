<!-- function of header on wp -->
<?php get_header(); ?>

<main>

	<?php
	/**
	 * @Author: Aufal Marom
	 * @Date:   2018-05-01 11:42:50
	 * @Last Modified by:   aufalmarom
	 * @Last Modified time: 2018-06-02 04:12:39
	 */
	?>
<style>
	.sub_judul{
		font-weight: bold;
		font-size: 20px;
	}

	header nav{
		float:left;
	}

</style>
<?php
	// check post wordpress 
	if ( have_posts()): ?>

		<p class="sub_judul">
			Halaman Pencari
		</p>

		<?php 

		while ( have_posts()): 
			the_post ();  
			// ngehilangin cari halaman
			if ($post->post_type == 'page') continue;
	

		get_template_part('content');
		
		endwhile;
	else:
		echo 'Tidak ada Post';
	endif;
	?>

</main>

<!-- //function of footer on wp -->
<?php get_footer(); ?>


