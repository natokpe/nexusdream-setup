<?php
declare(strict_types = 1);

return [
    'job_info' => [
        'title'         => __('Info', 'natokpe'),
        'object_types'  => ['job_position'],
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true,
        'closed'        => false,

        'box-fields' => [
            'job_desc' => [
                'name'    => __('Job Description', 'natokpe'),
                'desc'    => __('Describe', 'natokpe'),
                'type'    => 'textarea',
                'options' => [
                ],
            ],

            'job_resp' => [
                'name'    => __('Responsibilities', 'natokpe'),
                'desc'    => __('', 'natokpe'),
                'type'    => 'textarea',
                'options' => [
                ],
            ],

            'job_req' => [
                'name'    => __('Requirements', 'natokpe'),
                'desc'    => __('', 'natokpe'),
                'type'    => 'textarea',
                'options' => [
                ],
            ],

            'job_ben' => [
                'name'    => __('Benefits', 'natokpe'),
                'desc'    => __('', 'natokpe'),
                'type'    => 'textarea',
                'options' => [
                ],
            ],
        ],
    ],
];
