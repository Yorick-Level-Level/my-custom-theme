<?php
namespace Custom\Theme\PostTypes;

class Project {
    public const POST_TYPE_NAME = 'project';

    public function register_hooks():void {
        add_action('init', array($this, 'register'));
    }

    public function register():void {
        register_post_type(
			self::POST_TYPE_NAME,
			array(
				'labels'                => array(
                    'name'               => _x('Projects', 'post type general name'),
                    'singular_name'      => _x('Project', 'post type singular name'),
                    'menu_name'          => _x('Projects', 'admin menu'),
                    'name_admin_bar'     => _x('Project', 'add new on admin bar'),
                    'add_new'            => _x('Add New', 'project'),
                    'add_new_item'       => __('Add New Project'),
                    'new_item'           => __('New Project'),
                    'edit_item'          => __('Edit Project'),
                    'view_item'          => __('View Project'),
                    'all_items'          => __('All Projects'),
                    'search_items'       => __('Search Projects'),
                    'parent_item_colon'  => __('Parent Projects:'),
                    'not_found'          => __('No projects found.'),
                    'not_found_in_trash' => __('No projects found in Trash.'),
				),
                'public'             => true,  // Set to true to make the post type publicly accessible on the frontend
                'publicly_queryable' => true,  // Allow queries on the frontend
                'show_ui'            => true,  // Show the post type in the admin UI
                'show_in_menu'       => true,  // Show the post type in the admin menu
                'query_var'          => true,  // Enable the use of the post type's slug as a query variable
                'rewrite'            => array('slug' => 'projects'), // Set the URL slug for the post type
                'capability_type'    => 'post',  // Use 'post' capabilities
                'has_archive'        => true,  // Enable post type archives
                'hierarchical'       => false, // Set to true if the post type should behave like a hierarchical post type (pages)
                'menu_position'      => null,  // Use default menu position
                'menu_icon'             => 'dashicons-portfolio', // Adds icon to the menu 
                'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'), // Define supported features
			)
		);
    }
}
