<?php
declare(strict_types = 1);

use NatOkpe\Wp\Plugin\NexusdreamSetup\Engine;

/* Config: Taxonomies */
return [
    'faq-topic' => [
        'object_type' => 'faq',
        'args' => [
            'label'        => _x('Topics', 'topic taxonomy general name'),
            'labels' => [
                'name' => _x('Topics', 'topic taxonomy general name'),
                'singular_name' => _x('Topic', 'topic taxonomy singular name'),
                'menu_name' => __('Topics', 'thewedding'),
                'all_items' => __('All Topics', 'thewedding'),
                'edit_item' => __('Edit Topic', 'thewedding'),
                'view_item' => __('View Topic', 'thewedding'),
                'update_item' => __('Update Topic', 'thewedding'),
                'add_new_item' => __('Add New Topic', 'thewedding'),
                'new_item_name' => __('New Topic Name', 'thewedding'),
                'parent_item' => __('Parent Topic', 'thewedding'),
                'parent_item_colon' => __('Parent Topic:', 'thewedding'),
                'search_items' => __('Search Topics', 'thewedding'),
                'popular_items' => __('Popular Topics', 'thewedding'),
                'separate_items_with_commas' => __('Separate topics with commas', 'thewedding'),
                'add_or_remove_items' => __('Add or remove topics', 'thewedding'),
                'choose_from_most_used' => __('Choose from most used topic', 'thewedding'),
                'not_found' => __('No topic found.', 'thewedding'),
                'back_to_items' => __('← Back to topics', 'thewedding'),
            ],
            'description' => __('Topics specifies roles of members of thewedding as aligned with their responsibilities within the organisation.', 'thewedding'),
            'public' => true,
            'publicly_queryable' => true,
            'hierarchical' => false,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'show_in_rest' => true,
            'show_tagcloud' => false,
            'show_in_quick_edit' => true,
            'show_admin_column' => true,
            // 'meta_box_cb' => function () {},
            // 'meta_box_sanitize_cb' => function () {},
            // 'capabilities' => [
            //     'manage_terms' => 'manage_categories',
            //     'edit_terms' => 'manage_categories',
            //     'delete_terms' => 'manage_categories',
            //     'assign_terms' => 'edit_posts',
            // ],
            'rewrite' => [
                // 'slug' => 'topic',
                'with_front' => false,
            ],
            // 'query_var' => 'topic',
            // 'default_term' => [
            //     'name' => 'Member',
            //     'slug' => 'member',
            //     'description' => 'Default topic',
            // ],
            // 'sort' => null,
            // 'args' => [],
        ],
    ],
];
