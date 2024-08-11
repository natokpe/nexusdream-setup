<?php
declare(strict_types = 1);

use NatOkpe\Wp\Plugin\NexusdreamSetup\Engine;

/* Config: Post types */
return [
    'course' => [
        'label'  => 'Course',
        'labels' => [
            'name'                     => 'Courses',
            'singular_name'            => 'Course',
            'add_new'                  => 'Add New Course',
            'add_new_item'             => 'Add New Course',
            'edit_item'                => 'Edit Course',
            'new_item'                 => 'New Course',
            'view_item'                => 'View Course',
            'view_items'               => 'View Courses',
            'search_items'             => 'Search Courses',
            'not_found'                => 'No courses found',
            'not_found_in_trash'       => 'No courses found in Trash',
            'parent_item_colon'        => 'Parent Course:',
            'all_items'                => 'All Courses',
            'archives'                 => 'Course Archives',
            'attributes'               => 'Course Attributes',
            'insert_into_item'         => 'Insert into course',
            'uploaded_to_this_item'    => 'Uploaded to this course',
            'featured_image'           => 'Featured image',
            'set_featured_image'       => 'Set featured image',
            'remove_featured_image'    => 'Remove featured image',
            'use_featured_image'       => 'Use as featured image',
            'menu_name'                => 'Courses',
            'filter_items_list'        => 'Filter courses list',
            'filter_by_date'           => 'Filter by date',
            'items_list_navigation'    => 'Courses list navigation',
            'items_list'               => 'Courses list',
            'item_published'           => 'Course published.',
            'item_published_privately' => 'Course published privately.',
            'item_reverted_to_draft'   => 'Course reverted to draft.',
            'item_trashed'             => 'Course trashed.',
            'item_scheduled'           => 'Course scheduled.',
            'item_updated'             => 'Course updated.',
            'item_link'                => 'Course Link',
            'item_link_description'    => 'A link to a course.',
        ],
        'description'         => 'Courses',
        'public'              => true,
        'hierarchical'        => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'show_in_rest'        => true,
        'menu_position'       => 20,
        'menu_icon'        => 'dashicons-book-alt',
        'capability_type'     => ['course', 'courses'],
        // 'capabilities'     => [],
        'map_meta_cap'        => true,
        'supports'            => [
            'title',
            'editor',
            // 'trackbacks',
            // 'author',
            'excerpt',
            'page-attributes',
            'thumbnail',
        ],
        'taxonomies' => [
        ],
        'has_archive' => false,
        'rewrite' => [
        //     'slug' => '',
            'with_front' => false,
        ],
        // 'query_var ' => '',
        'can_export'       => true,
        'delete_with_user' => false,
    ],

    // Register the "class" custom post type
    'class' => [
        'label'  => 'Class',
        'labels' => [
            'name'                     => 'Classes',
            'singular_name'            => 'Class',
            'add_new'                  => 'Add New Class',
            'add_new_item'             => 'Add New Class',
            'edit_item'                => 'Edit Class',
            'new_item'                 => 'New Class',
            'view_item'                => 'View Class',
            'view_items'               => 'View Classes',
            'search_items'             => 'Search Classes',
            'not_found'                => 'No classes found',
            'not_found_in_trash'       => 'No classes found in Trash',
            'parent_item_colon'        => 'Parent Class:',
            'all_items'                => 'All Classes',
            'archives'                 => 'Class Archives',
            'attributes'               => 'Class Attributes',
            'insert_into_item'         => 'Insert into class',
            'uploaded_to_this_item'    => 'Uploaded to this class',
            'featured_image'           => 'Featured image',
            'set_featured_image'       => 'Set featured image',
            'remove_featured_image'    => 'Remove featured image',
            'use_featured_image'       => 'Use as featured image',
            'menu_name'                => 'Classes',
            'filter_items_list'        => 'Filter classes list',
            'filter_by_date'           => 'Filter by date',
            'items_list_navigation'    => 'Classes list navigation',
            'items_list'               => 'Classes list',
            'item_published'           => 'Class published.',
            'item_published_privately' => 'Class published privately.',
            'item_reverted_to_draft'   => 'Class reverted to draft.',
            'item_trashed'             => 'Class trashed.',
            'item_scheduled'           => 'Class scheduled.',
            'item_updated'             => 'Class updated.',
            'item_link'                => 'Class Link',
            'item_link_description'    => 'A link to a class.',
        ],
        'description'         => 'Classes',
        'public'              => false,
        'hierarchical'        => false,
        'exclude_from_search' => true,
        'publicly_queryable'  => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'show_in_rest'        => true,
        'menu_position'       => 20,
        'menu_icon'           => 'dashicons-media-interactive',
        'capability_type'     => ['class', 'classes'],
        // 'capabilities'     => [],
        'map_meta_cap'        => true,
        'supports'            => [
            'title',
            'editor',
            // 'trackbacks',
            'author',
            'excerpt',
            'page-attributes',
            // 'thumbnail',
        ],
        'taxonomies' => [
        ],
        'has_archive' => false,
        'rewrite' => [
        //     'slug' => '',
            'with_front' => false,
        ],
        // 'query_var ' => '',
        'can_export'       => true,
        'delete_with_user' => false,
    ],

    'faq' => [
        'label'  => 'FAQs',
        'labels' => [
            'name'                     => 'FAQs',
            'singular_name'            => 'FAQ',
            'add_new'                  => 'Add New FAQ',
            'add_new_item'             => 'Add New FAQ',
            'edit_item'                => 'Edit FAQ',
            'new_item'                 => 'New FAQ',
            'view_item'                => 'View FAQ',
            'view_items'               => 'View FAQs',
            'search_items'             => 'Search FAQs',
            'not_found'                => 'No faqs found',
            'not_found_in_trash'       => 'No faqs found in Trash',
            'parent_item_colon'        => 'Parent FAQ:',
            'all_items'                => 'All FAQs',
            'archives'                 => 'FAQ Archives',
            'attributes'               => 'FAQ Attributes',
            'insert_into_item'         => 'Insert into faq',
            'uploaded_to_this_item'    => 'Uploaded to this faq',
            'featured_image'           => 'Featured image',
            'set_featured_image'       => 'Set featured image',
            'remove_featured_image'    => 'Remove featured image',
            'use_featured_image'       => 'Use as featured image',
            'menu_name'                => 'FAQs',
            'filter_items_list'        => 'Filter faqs list',
            'filter_by_date'           => 'Filter by date',
            'items_list_navigation'    => 'FAQs list navigation',
            'items_list'               => 'FAQs list',
            'item_published'           => 'FAQ published.',
            'item_published_privately' => 'FAQ published privately.',
            'item_reverted_to_draft'   => 'FAQ reverted to draft.',
            'item_trashed'             => 'FAQ trashed.',
            'item_scheduled'           => 'FAQ scheduled.',
            'item_updated'             => 'FAQ updated.',
            'item_link'                => 'FAQ Link',
            'item_link_description'    => 'A link to a faq.',
        ],
        'description'         => 'Frequently Asked Questions (FAQs)',
        'public'              => true,
        'hierarchical'        => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'show_in_rest'        => true,
        'menu_position'       => 20,
        'menu_icon'        => 'dashicons-editor-help',
        'capability_type'     => ['faq', 'faqs'],
        // 'capabilities'     => [],
        'map_meta_cap'        => true,
        'supports'            => [
            'title',
            'editor',
            'trackbacks',
            'author',
            'excerpt',
            'page-attributes',
            'thumbnail',
        ],
        'taxonomies' => [
            'faq-topic'
        ],
        'has_archive' => false,
        'rewrite' => [
        //     'slug' => '',
            'with_front' => false,
        ],
        // 'query_var'        => '',
        'can_export'       => true,
        'delete_with_user' => false,
    ],

];