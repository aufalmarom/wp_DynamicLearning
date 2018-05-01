<?php

/**
 * @Author: Aufal Marom
 * @Date:   2018-05-01 11:42:50
 * @Last Modified by:   aufalmarom
 * @Last Modified time: 2018-05-01 12:32:18
 */

//check post wordpress
if ( have_posts()):
	while ( have_posts()): 
		the_post (); //post
		the_title();    //judul
		the_content();  //content
	endwhile;
else:
	echo 'Tidak ada Post';
endif;

?>

<!DOCTYPE html>
<html>
<head>
	<title>Dynamic Learning</title>
</head> 
<body>

</body>
</html>
