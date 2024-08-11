<?php
declare(strict_types = 1);

use NatOkpe\Wp\Plugin\NexusdreamSetup\Engine;

return [
    'senior_administrator' => [ // Class I
        'name' => 'Senior Administrator',
        'cap' => [
        ],
    ],

    'junior_administrator' => [ // Class II
        'name' => 'Junior Administrator',
        'cap' => [
        ],
    ],
];

/* Multisite Super Admins have, by default, all capabilities. The following Multisite-only capabilities are therefore only available to Super Admins: */
// 'create_sites',
// 'delete_sites',
// 'manage_network',
// 'manage_sites',
// 'manage_network_users',
// 'manage_network_plugins',
// 'manage_network_themes',
// 'manage_network_options',
// 'upgrade_network',
// 'setup_network',

/* All administrators have the following capabilities: */
// 'activate_plugins',
// 'delete_others_pages',
// 'delete_others_posts',
// 'delete_pages',
// 'delete_posts',
// 'delete_private_pages',
// 'delete_private_posts',
// 'delete_published_pages',
// 'delete_published_posts',
// 'edit_dashboard',
// 'edit_others_pages',
// 'edit_others_posts',
// 'edit_pages',
// 'edit_posts',
// 'edit_private_pages',
// 'edit_private_posts',
// 'edit_published_pages',
// 'edit_published_posts',
// 'edit_theme_options',
// 'export',
// 'import',
// 'list_users',
// 'manage_categories',
// 'manage_links',
// 'manage_options',
// 'moderate_comments',
// 'promote_users',
// 'publish_pages',
// 'publish_posts',
// 'read_private_pages',
// 'read_private_posts',
// 'read',
// 'create Patterns',
// 'edit Patterns',
// 'read Patterns',
// 'delete Patterns',
// 'remove_users',
// 'switch_themes',
// 'upload_files',
// 'customize',
// 'delete_site',

/* Only Administrators of single site installations have the following capabilities. In Multisite, only the Super Admin has these abilities: */
// 'update_core',
// 'update_plugins',
// 'update_themes',
// 'install_plugins',
// 'install_themes',
// 'delete_themes',
// 'delete_plugins',
// 'edit_plugins',
// 'edit_themes',
// 'edit_files',
// 'edit_users',
// 'add_users',
// 'create_users',
// 'delete_users',
// 'unfiltered_html',

// 'level_0'

// 'unfiltered_upload',
