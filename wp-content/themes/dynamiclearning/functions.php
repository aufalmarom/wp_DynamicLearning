<?php

/**
 * @Author: aufalmarom
 * @Date:   2018-05-01 13:30:14
 * @Last Modified by:   aufalmarom
 * @Last Modified time: 2018-05-04 00:03:00
 */

//load script css/js
function load_file(){
	wp_enqueue_style('style', get_stylesheet_uri()); //link
}

//manggil fungsi
add_action('wp_enqueue_scripts', 'load_file'); 

//ngasih tau tema, kalau kita mau pake menu custom
register_nav_menus(array(
	'main_menu' => 'Menu Utama',
	'footer_menu' => 'Menu Footer'
));

// fungsi the excerpt atau pembatasan teks
function get_excerpt_length(){
	return 5;
}

//fungsi menukar bacaan
function return_excerpt_text(){
	return '';
}

//fungsi excerpt wp
add_filter('excerpt_more', 'return_excerpt_text');
add_filter('excerpt_length', 'get_excerpt_length');
?>