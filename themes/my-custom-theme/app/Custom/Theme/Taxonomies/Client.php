<?php
namespace Custom\Theme\Taxonomies;

use Custom\Theme\PostTypes\Project;

class Client {
    public const TAXONOMY_NAME = 'client';
    protected const POST_TYPES = array( Project::POST_TYPE_NAME );

    public function register_hooks(): void {
        add_action('init', array($this, 'register'));
    }

    public function register(): void {
        $labels = array(
            'name' => 'Clients',
            'singular_name' => 'Client',
            'search_items' => 'Search Clients',
            'all_items' => 'All Clients',
            'parent_item' => 'Parent Client', 
            'parent_item_colon' => 'Parent Client:',
            'edit_item' => 'Edit Client', 
            'update_item' => 'Update Client', 
            'add_new_item' => 'Add New Client',
            'new_item_name' => 'New Client Name',
            'menu_name' => 'Clients',
        );
    
        $args = array(
            'labels' => $labels,                // The labels array containing various text strings.
            'hierarchical' => true,             // Set to true for hierarchical (like categories) or false for non-hierarchical (like tags).
            'public' => true,                   // Whether the taxonomy is publicly queryable.
            'show_ui' => true,                  // Whether to show the taxonomy in the admin interface.
            'show_admin_column' => true,        // Whether to display the taxonomy in the admin column.
            'show_in_nav_menus' => true,        // Whether to show the taxonomy in navigation menus.
            'show_tagcloud' => true,            // Whether to display the taxonomy in the tag cloud widget.
        );

        register_taxonomy( self::TAXONOMY_NAME, self::POST_TYPES, $args );
    }
}