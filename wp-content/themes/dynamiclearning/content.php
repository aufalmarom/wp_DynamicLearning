<?php

/**
 * @Author: aufalmarom
 * @Date:   2018-06-02 01:45:44
 * @Last Modified by:   aufalmarom
 * @Last Modified time: 2018-06-02 02:57:39
 */
	
if(is_single()): ?>

<h3><?php the_title(); ?> </h3>   
<p><?php the_content(); ?></p>
<?php the_post_thumbnail('big_thumb'); ?>

<?php elseif( is_page() ): ?>

<h3> Halaman <?php the_title(); ?></h3>   
<p> <?php the_content(); ?></p>



<?php else: ?>
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
	<?php the_post_thumbnail('small_thumb'); ?>

<?php endif; ?>