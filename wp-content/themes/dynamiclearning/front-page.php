<?php

/**
 * @Author: aufalmarom
 * @Date:   2018-06-02 03:13:44
 * @Last Modified by:   aufalmarom
 * @Last Modified time: 2018-06-02 04:03:07
**/
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Dynamic Learning</title>
	
	<style media="screen">

		body{
			margin: 50px auto;
			width: 80%;
		}

		#front-page{
			text-align: center;
		}	

		h1{
			font-size: 50px;

		}

		#custom_post h2{
			font-size: 25px;
		}

		#custom_post a{
			display: inline-block;
			width: 25%;
			margin: 0 1.5%;
			background-color: rgb(214, 125, 112);
			padding: 5px;
			text-align: center;
			text-decoration: none;
		}
	</style>
</head>
<body>
	

		<div id="front-page">
			
			<h1>Selamat Datang</h1>
			<a href="<?php echo home_url('/blog'); ?>"> Menuju Blog</a>
		
			<div id="custom_post">	
				<h2>Post Terakhir : </h2>
				<?php 

					$custom_post = new WP_Query('cat=5&posts_per_page=3');

					if ($custom_post -> have_posts()):
						while($custom_post -> have_posts()): $custom_post -> the_post(); ?>
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						<?php  
						endwhile;

					else:
						echo 'tidak ada berita';
					endif;
				 ?>

			</div>
		</div>