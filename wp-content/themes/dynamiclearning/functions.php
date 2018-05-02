<?php

/**
 * @Author: aufalmarom
 * @Date:   2018-05-01 13:30:14
 * @Last Modified by:   aufalmarom
 * @Last Modified time: 2018-05-02 21:21:49
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

?>