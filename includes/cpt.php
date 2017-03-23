<?php


function create_post_type(){

	register_post_type('dishes',array(
		'labels' => array(
			'name' => 'Dishes',
			'singular_name' => 'Dish',
			'add_new' => 'New dish',
			'add_new_item' => 'Add new dish',
			'edit_item' => 'Edit dish',
			'new_item' => 'New dish',
			'view_item' => 'Show dish',
			'search_items' => 'Search dish',
			'not_found' => 'No dishes to show'
			),
		'public' => true,
		'menu_icon' => 'dashicons-carrot',
		'supports' => array( 'title' , 'editor')

		));
}
add_action( 'init' , 'create_post_type' );


function create_taxonomy(){
	register_taxonomy(
		'dish_type',
		array( 'dishes' ),
		array(
			'labels' => array(
				'name' => 'Dish-type',
				'singular_name' => 'Dish-type'
			),
		'hierarchical' => true,
		'show_admin_column' => true
		)
	);
}
add_action( 'init' , 'create_taxonomy' );
