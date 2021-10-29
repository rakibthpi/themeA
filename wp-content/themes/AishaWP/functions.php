<?php

add_action('after_setup_theme',function(){
    
	add_theme_support('title-tag');



	register_nav_menus(array(
		'main-menu'		=>	'Main Menu',
	));

});