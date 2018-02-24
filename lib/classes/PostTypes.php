<?php
namespace LauraWienk;

final class PostTypes
{
	public function __construct()
	{
		add_action('init', [$this, 'register']);
	}

	public function register()
	{
		$labels = array(
			'name'				=> 'Portfolio',
			'singular_name'		=> 'Portfolio' ,
			'menu_name'			=> 'Portfolio',
			'add_new'			=> 'Add item',
			'add_new_item'		=> 'Add item',
			'new_item'			=> 'New item',
			'edit_item'			=> 'Edit item',
			'all_items'			=> 'All items',
		);

		$args = array(
			'labels'				=> $labels,
			'public'				=> true,
			'publicly_queryable'	=> true,
			'show_ui'				=> true,
			'show_in_menu'			=> true,
			'query_var'				=> true,
			'rewrite'				=> array('slug' => 'portfolio'),
			'capability_type'		=> 'post',
			'has_archive'			=> true,
			'hierarchical'			=> false,
			'menu_position'			=> null,
			'supports'				=> array('title', 'editor'),
			'menu_icon'				=> 'dashicons-format-gallery',
		);

		register_post_type('portfolio', $args);
	}
}
