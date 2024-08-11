<?php
declare(strict_types = 1);

$course_ins = [];

foreach (get_users([
    'role'     => ['instructor'],
    'role__in' => ['instructor'],
    'fields'   => 'all',
]) as $_ins) {
    $course_ins[$_ins->ID] = empty($_ins->display_name) ? $_ins->user_email
    : $_ins->display_name . ' (' . $_ins->user_email . ')';
}

// add modules

return [
    'std_eng' => [
        'title'         => __('Student Engagement', 'natokpe'),
        'object_types'  => ['course'],
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true,
        'closed'        => true,

        'box-fields' => [
            'std_eng_st' => [
                'name'       => __('Start date', 'natokpe'),
                'desc'       => __('When classes will begin.', 'natokpe'),
                'type'       => 'text_datetime_timestamp',
                'attributes'       => [
                    'required'    => 'required',
                ],
            ],

            'std_eng_du' => [
                'name'       => __('Course duration (in days)', 'natokpe'),
                'desc'       => __('Number of days this course will be active.', 'natokpe'),
                'type'       => 'text',
                'attributes'  => [
                    'required'    => 'required',
                    'min' => '0',
                    'type' => 'number',
                ],
            ],

            'std_eng_hr' => [
                'name'       => __('Engagement time (in hours)', 'natokpe'),
                // 'desc'       => __('', 'natokpe'),
                'type'       => 'text',
                'attributes'  => [
                    'min' => '0',
                    'type' => 'number',
                ],
            ],

        ],
    ],

    'std_enr' => [
        'title'         => __('Enrollment Settings', 'natokpe'),
        'object_types'  => ['course'],
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true,
        'closed'        => true,

        'box-fields' => [
            'std_enr_all' => [
                'name'       => __('Enable enrollment', 'natokpe'),
                'desc'       => __('Check to allow enrollment for this course', 'natokpe'),
                'type'       => 'checkbox',
                'attributes'  => [
                ],
            ],

            'std_enr_st' => [
                'name'       => __('Enrollment Start Date/Time ', 'natokpe'),
                'desc'       => __('Choose the time allowed for enrollment for this course to begin. Effective only if course enrollment is enabled.', 'natokpe'),
                'type'       => 'text_datetime_timestamp',
                'attributes'       => [
                ],
            ],

            'std_enr_end' => [
                'name'       => __('Enrollment End Date/Time', 'natokpe'),
                'desc'       => __('Choose the time to close enrollment for this course.', 'natokpe'),
                'type'       => 'text_datetime_timestamp',
                'attributes'       => [
                ],
            ],

            'enrollment_fee' => [
                'name'       => __('Enrollment fee', 'natokpe'),
                'desc'       => __('Amount to be paid by student to enroll for this course. Enter 0 or leave empty if this is a free course.', 'natokpe'),
                'type' => 'text_small',
                'before_field' => '₦', // NGN
                'attributes'  => [
                    // 'required'    => 'required',
                    // 'style' => 'width: 100%;',
                    'min' => '0',
                    'type' => 'number',
                ],
            ],
        ],
    ],

    'std_ins' => [
        'title'         => __('Instructors', 'natokpe'),
        'object_types'  => ['course'],
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true,
        'closed'        => true,

        'box-fields' => [
            'std_ins_list' => [
                'name'       => __('Assign instructors', 'natokpe'),
                // 'desc'       => __('', 'natokpe'),
                'type'       => 'multicheck',
                'options' => $course_ins,
                'attributes'  => [
                ],
            ],
        ],
    ],

    'std_mat' => [
        'title'         => __('Course Materials', 'natokpe'),
        'object_types'  => ['course'],
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true,
        'closed'        => true,

        'box-fields' => [
            'std_mat_gr' => [
                'type'        => 'group',
                'description' => __('Add course materials', 'natokpe'),
                'repeatable'  => true,
                'options'     => [
                    'group_title'    => __('Course material {#}', 'natokpe'),
                    'add_button'     => __('Add Another Material', 'natokpe'),
                    'remove_button'  => __('Remove Material', 'natokpe'),
                    'sortable'       => true,
                    'closed'         => true,
                    'remove_confirm' => esc_html__('Are you sure you want to remove this material?', 'natokpe'),
                ],

                'group-fields' => [
                    'std_mat_gr_n' => [
                        'name' => 'Name',
                        'type' => 'text',
                        'attributes'       => [
                        ],
                    ],

                    'std_mat_gr_mt' => [
                        'name' => 'Material',
                        'type' => 'file',
                        'attributes' => [
                        ],
                        'url' => true,
                        'query_args' => [
                            'type' => [
                                'application/pdf',
                                'application/docx',
                            ],
                        ],
                        'preview_size' => 'medium',
                    ],
                ],
            ],
        ],
    ],

];
