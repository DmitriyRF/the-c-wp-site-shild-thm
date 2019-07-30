<?php

function make_body_2_8_1($POST)
{

    $body = '';

    $title = 'FREE OFFICE SPACE PLANNING &<br>DESIGN QUOTE';

    $body .= row_with_title____group_of_single___page_title($title);

    $main_header = 'Project details';

    $body .= row_with_header___group_of_single___main_header($main_header);

    $multiple_inputs = [
        'contact_name' => ['label' => 'Name', 'placeholder' => '*Name'],
        'contact_company' => ['label' => 'Company', 'placeholder' => '*Company'],
        'contact_email' => ['label' => 'Email', 'placeholder' => '*Email'],
        'contact_phone' => ['label' => 'Phone number', 'placeholder' => '*Phone number'],
    ];

    $body .= row_with_header___group_of_multiple_textInputs($POST, null, $multiple_inputs);

    $header = 'How to initiate office space layout project?';

    $radio_array = [
        'name' => 'how_initiate_layout_project',
        'values' => [
          'Site Visit',
          'Attach Office Layout'
          ]
      ];

    $body .= row_with_header___group_of_multiple_radioInputs($POST, $header, $radio_array);

    $header = 'How many employees will be accommodated?';

    $body .= row_with_header___group_of_single___header($header);

    $textarea_opt = [
        'name' => 'how_many_employees_accommodated',
        'placeholder' => 'Please, describe',
    ];

    $body .= row_______________group_of_single___textarea____comment_custom($POST, $textarea_opt);

    // $header = 'Please, group by departments';

    // $body .= row_with_header___group_of_single___header($header);

    $textarea_opt = [
        'name' => 'group_by_departments',
        'placeholder' => 'Please, group by departments',
    ];

    $body .= row_______________group_of_single___textarea____comment_custom($POST, $textarea_opt);

    $header = 'When would you like to schedule the site visit?';

    $radio_array = [
        'name' => 'when_schedule_site_visit',
        'values' => [
            'Don’t have a date',
            'As soon as possible',
        ],
    ];

    $body .= row_with_header___group_of_multiple_radioInputs($POST, $header, $radio_array);

    $radio_item = [
        'name' => 'when_schedule_site_visit',
        'value' => 'Choose the date',
        'placeholder' => 'Pick a date',
    ];

    $body .= row_______________group_of_single___radioInputs_with_date($POST, $radio_item);

    $header = 'Do you require office reconfiguration services?';

    $radio_array = [
        'name' => 'office_reconfiguration_services',
        'values' => [
            'YES ',
            'NO ',
        ],
    ];

    $body .= row_with_header___group_of_multiple_radioInputs($POST, $header, $radio_array);

    $header = 'OFFICE ADDRESS';

    $array_of_fields = [
        'address' => [
            'label' => '*Address',
            'name' => 'contact_address',
            'is_required' => true,
        ],
        'city' => [
            'label' => '*City',
            'name' => 'contact_city',
            'is_required' => true,
        ],
        'state' => [
            'label' => '*State',
            'name' => 'contact_state',
            'is_required' => true,
        ],
        'zip_code' => [
            'label' => '*Zip Code',
            'name' => 'contact_zip_code',
            'is_required' => true,
        ],
    ];

    $body .= row_with_header___group_of_multiple_textInputs____addresses_custom($POST, $header, $array_of_fields);

    $textarea_opt = [
        'name' => 'contact_details',
        'placeholder' => 'Additional Comments',
    ];

    $body .= row_______________group_of_single___textarea____comment_custom($POST, $textarea_opt);

    return __table__r_($body);
}
