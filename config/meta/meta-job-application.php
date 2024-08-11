<?php
declare(strict_types = 1);

$class_cou  = [];

foreach (get_posts([
    'has_password' => false,
    'post_type'    => 'course',
    'post_status'  => 'publish',
    'nopaging'     => true,
    'order'        => 'ASC',
    'order_by'     => 'title'
]) as $_cp) {
    $class_cou[$_cp->ID] = empty($_cp->post_title) ? 'Course ID: ' . $_cp->ID
    : $_cp->post_title . ' (Course ID: ' . $_cp->ID .')';
}

return [

    'cls_pr' => [
        'title'         => __('Course Settings', 'natokpe'),
        'object_types'  => ['class'],
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true,
        'closed'        => true,

        'box-fields' => [
            'course_id' => [
                'name'       => __('Course', 'natokpe'),
                'desc'       => __('Select course this class is for.', 'natokpe'),
                'type'       => 'select',
                'show_option_none' => true,
                'options'          => $class_cou,
                'attributes'       => [
                    'required'    => 'required',
                ],
            ],
        ],
    ],

    'cls_set' => [
        'title'         => __('Schedule', 'natokpe'),
        'object_types'  => ['class'],
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true,
        'closed'        => true,

        'box-fields' => [
            'start_time' => [
                'name'       => __('Start Date/Time', 'natokpe'),
                'desc'       => __('Set a time when class session will begin.', 'natokpe'),
                'type'       => 'text_datetime_timestamp',
                'attributes'       => [
                    'required'    => 'required',
                ],
            ],

            'duration' => [
                'name'       => __('Duration (in minutes)', 'natokpe'),
                'desc'       => __('For how long will the class session be on. Minimum is 1 minute.', 'natokpe'),
                'type'       => 'text',
                'attributes'  => [
                    'required'    => 'required',
                    'min' => '1',
                    'type' => 'number',
                ],
            ],

            'virtual_class_url' => [
                'name'       => __('Class URL', 'natokpe'),
                'desc'       => __('A URL to the online class.', 'natokpe'),
                'type'       => 'text_url',
                'attributes'       => [
                    'required'    => 'required',
                ],
            ],

            'virtual_class_pass' => [
                'name'       => __('Class Pass', 'natokpe'),
                'desc'       => __('Access code for joining class if required.', 'natokpe'),
                'type'       => 'text',
                'attributes'  => [
                ],
            ],
        ],
    ],

];
