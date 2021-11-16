<?php 

/*  ================  Menu Register Start  =============== */
function simple_metter(){

	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');


	// Menu register
	register_nav_menus(array(
		'main-menu'		=>	'Main Menu',
		'footer-menu'		=>	'Footer Menu',
	));

	// Services Post Type
	register_post_type('services',array(
		'label'		=>	'Service',
		'public'	=>	true,
	));

}
add_action('after_setup_theme','simple_metter');
/*  ================  Menu Register End  =============== */

/*  ================  Sidebar Register Start  =============== */
function rakibthpi_sidebar(){
	register_sidebar(array(
		'name'		=>	'Right Sidebar',
		'id'		=>	'right_sidebar_id',
		'before_widget'	=>	'<div class="right_sidebar_main_area">',
		'after_widget'	=>	'</div>',
		'before_title'	=>	'<h1 class"sidebar_title">',
		'after_title'	=>	'</h1>'
	));
}
add_action('widget_init','rakibthpi_sidebar');
/*  ================  Sidebar Register End  =============== */


/*  ================  Services Register Start  =============== */

/*  ================  Services Register End  =============== */


add_filter( 'use_widgets_block_editor', '__return_false' );