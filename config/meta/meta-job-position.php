<?php
declare(strict_types = 1);

return [
    'job_description' => [
        'title'         => __('Job Description', 'natokpe'),
        'object_types'  => ['job_position'],
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true,
        'closed'        => false,

        'box-fields' => [
            'job_loc' => [
                'name'    => __('Location', 'natokpe'),
                'desc'    => __('', 'natokpe'),
                'type'    => 'text',
                'options' => [
                ],
            ],

            'job_type' => [
                'name'    => __('Type', 'natokpe'),
                'desc'    => __('', 'natokpe'),
                'type'    => 'select',
                'options' => [
                    'Full-Time' =>'Full-Time',
                    'Part-Time' =>'Part-Time',
                    'Contract'  =>'Contract',
                ],
            ],

            'job_desc' => [
                'name'    => __('Overview', 'natokpe'),
                'desc'    => __('', 'natokpe'),
                'type'    => 'wysiwyg',
                'options' => [
                ],
            ],

            'job_resp' => [
                'name'    => __('Responsibilities', 'natokpe'),
                'desc'    => __('', 'natokpe'),
                'type'    => 'wysiwyg',
                'options' => [
                ],
            ],

            'job_req' => [
                'name'    => __('Requirements', 'natokpe'),
                'desc'    => __('', 'natokpe'),
                'type'    => 'wysiwyg',
                'options' => [
                ],
            ],

            'job_ben' => [
                'name'    => __('Benefits', 'natokpe'),
                'desc'    => __('', 'natokpe'),
                'type'    => 'wysiwyg',
                'options' => [
                ],
            ],
        ],
    ],
];
