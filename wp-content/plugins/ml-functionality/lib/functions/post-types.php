<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...

// Register Custom Post Type


// Custom Post Type 

function ml_create_project_post_type() {

	$labels = array(
		'name'                => 'Projects',
		'singular_name'       => 'Project',
		'menu_name'           => 'Projects',
		'name_admin_bar'      => 'Projects',
		'parent_item_colon'   => 'Parent Project:',
		'all_items'           => 'All Projects',
		'add_new_item'        => 'Add New Project',
		'add_new'             => 'Add New',
		'new_item'            => 'New Project',
		'edit_item'           => 'Edit Project',
		'update_item'         => 'Update Project',
		'view_item'           => 'View Project',
		'search_items'        => 'Search Project',
		'not_found'           => 'Not found',
		'not_found_in_trash'  => 'Not found in Trash',
	);
	$args = array(
		'label'               => 'Project',
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields',),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-clipboard',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => 'projects',		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'project', $args );

}
add_action( 'init', 'ml_create_project_post_type', 0 );




function ml_create_skill_post_type() {

	$labels = array(
		'name'                => 'Skills',
		'singular_name'       => 'Skill',
		'menu_name'           => 'Skills',
		'name_admin_bar'      => 'Projects',
		'parent_item_colon'   => 'Parent Skill:',
		'all_items'           => 'All Skills',
		'add_new_item'        => 'Add New Skill',
		'add_new'             => 'Add New',
		'new_item'            => 'New Skill',
		'edit_item'           => 'Edit Skill',
		'update_item'         => 'Update Skill',
		'view_item'           => 'View Skill',
		'search_items'        => 'Search Skill',
		'not_found'           => 'Not found',
		'not_found_in_trash'  => 'Not found in Trash',
	);
	$args = array(
		'label'               => 'Skill',
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields',),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => 'skills',		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'skill', $args );

}
add_action( 'init', 'ml_create_skill_post_type', 0 );
