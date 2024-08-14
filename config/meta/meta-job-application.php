<?php
declare(strict_types = 1);

// var_dump(is_admin());exit;
// foreach (((new WP_Query([
//     'post_type'           => 'job_position',
//     'post_status'         => 'publish',
//     'has_password'        => false,
//     'ignore_sticky_posts' => false,
//     'order'               => 'DESC',
//     'orderby'             => 'date',
//     'nopaging'            => true,
//     'paged'               => false,
// ]))->posts) as $_) {
//     $cnt['jobs'][$_->ID] = $_->post_title;
// }

return [
    'app_det' => [
        'title'         => __('Details', 'natokpe'),
        'object_types'  => ['job_application'],
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true,
        'closed'        => false,

        'box-fields' => [
            'ref' => [
                'name'       => __('Application Reference', 'natokpe'),
                'desc'       => __('', 'natokpe'),
                'type'       => 'text',
                'attributes'       => [
                    'readonly'    => 'readonly',
                ],
            ],

            'job' => [
                'name'       => __('Position', 'natokpe'),
                'desc'       => __('', 'natokpe'),
                'type'       => 'text',
                'attributes'       => [
                    'readonly'    => 'readonly',
                ],
            ],

            'name' => [
                'name'       => __('Full Name', 'natokpe'),
                'desc'       => __('', 'natokpe'),
                'type'       => 'text',
                'attributes'       => [
                    'readonly'    => 'readonly',
                ],
            ],

            'email' => [
                'name'       => __('Email Address', 'natokpe'),
                'desc'       => __('', 'natokpe'),
                'type'       => 'text',
                'attributes'       => [
                    'readonly'    => 'readonly',
                ],
            ],

            'phone' => [
                'name'       => __('Phone Number', 'natokpe'),
                'desc'       => __('', 'natokpe'),
                'type'       => 'text',
                'attributes'       => [
                    'readonly'    => 'readonly',
                ],
            ],

            'edu' => [
                'name'       => __('Highest Educational Qualification', 'natokpe'),
                'desc'       => __('', 'natokpe'),
                'type'       => 'select',
                'attributes'       => [
                    'readonly'    => 'readonly',
                    'disabled' => 'disabled',
                ],
                'options' => [
                    'masters'  => 'Masters',
                    'bachelor' => 'Bachelor degree',
                    'ssce'     => 'Senior Secondary School certificate',
                    'jsce'     => 'Junior Secondary School certificate',
                    'primary'  => 'First School Leaving certificate',
                ],
            ],

            'skills' => [
                'name'       => __('Describe a skill or quality that you believe is essential for this role, and how you have developed or utilized this skill in your previous experiences.', 'natokpe'),
                'desc'       => __('', 'natokpe'),
                'type'       => 'textarea',
                'attributes'       => [
                    'readonly'    => 'readonly',
                ],
            ],

            'about' => [
                'name'       => __('Tell us more about yourself. Focus on your past experiences that have shaped your professional journey. Also highlight any key roles that have been instrumental in your career development.', 'natokpe'),
                'desc'       => __('', 'natokpe'),
                'type'       => 'textarea',
                'attributes'       => [
                    'readonly'    => 'readonly',
                ],
            ],

            'cv' => [
                'name'       => __('CV', 'natokpe'),
                'desc'       => __('', 'natokpe'),
                'type'       => 'text',
                'attributes'       => [
                    'readonly'    => 'readonly',
                ],
            ],

            'letter' => [
                'name'       => __('Cover Letter', 'natokpe'),
                'desc'       => __('', 'natokpe'),
                'type'       => 'text',
                'attributes'       => [
                    'readonly'    => 'readonly',
                ],
            ],

            'know' => [
                'name'       => __('How did you hear about us?', 'natokpe'),
                'desc'       => __('', 'natokpe'),
                'type'       => 'select',
                'attributes'       => [
                    'readonly' => 'readonly',
                    'disabled' => 'disabled',
                ],
                'options' => [
                    'word_of_mouth' => 'Word of mouth',
                    'google'        => 'Google',
                    'facebook'      => 'Facebook',
                    'instagram'     => 'Instagram',
                    'x'             => 'X',
                    'tiktok'        => 'Tiktok',
                    'other'         => 'Other',
                ],
            ],

        ],
    ],
];
