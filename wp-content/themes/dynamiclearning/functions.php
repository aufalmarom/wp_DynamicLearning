<?php

/**
 * @Author: aufalmarom
 * @Date:   2018-05-01 13:30:14
 * @Last Modified by:   aufalmarom
 * @Last Modified time: 2018-05-01 13:33:04
 */

//load script css/js
function load_file(){
	wp_enqueue_style('style', get_stylesheet_uri()); //link
}

//maggil fungsi
add_action('wp_enqueue_scripts', 'load_file'); 

?>