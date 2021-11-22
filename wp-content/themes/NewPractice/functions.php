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
	register_post_type('custom-post-type',array(
		'labels'		=>	array(
			'name'			=>	'Services',
			'add_new_item'	=>	'Add New Services',
			'featured_image'=>	'Services Images',
			'set_featured_image'	=>	'Set Services images',	
			'remove_featured_image'	=>	'Remove Services images',
			'use_featured_image'	=>	'Use Services images',
		),
		'public'	=>	true,
		'supports'	=>	array('title','editor','thumbnail','excerpt','custom-fields'),
		'menu_icon'	=>	'dashicons-image-rotate-left',
		'menu_position'	=>	5
	));

	register_taxonomy('services_type','custom-post-type',array(
		'labels'		=>	array(
			'name'		=>	'Services Item Type',
			'singular_name'	=>	'Singular Name',
			'add_new_item'	=>	'Add New Services',
			'search_items'	=>	'Search Services',
			'parent_item'	=>	'Services Item',
			'add_new_item'	=>	'Add New Services',
			'new_item_name'	=>	'Add New Services',
			'add_or_remove_items'	=>	'Remove Servics',
		),
		'hierarchical'	=>	true,
		'public'		=>	true


	));


	// New Post type start 
	register_post_type('gallery-item',array(
		'label'	=>	'Gallery',
		'public'	=>	true,
		'menu_icon'	=>	'dashicons-images-alt2',
		'menu_position'	=>	6
	));

}
add_action('after_setup_theme','simple_metter');
/*  ================  Menu Register End  =============== */

/*  ================  Sidebar Register Start  =============== */
function rakibthpi_sidebar(){
	register_sidebar( array(
		'name'		=>	'Right Sidebar',
		'id'		=>	'right_sidebar_id',
		'before_widget'	=>	'<div class="right_sidebar_main_area">',
		'after_widget'	=>	'</div>',
		'before_title'	=>	'<h1 class"sidebar_title">',
		'after_title'	=>	'</h1>'
	));
}
add_action('widgets_init','rakibthpi_sidebar');



/*  ================  Sidebar Register End  =============== */


/*  ================  Services Register Start  =============== */

/*  ================  Services Register End  =============== */


