<?php

function make_body_3_5_1($POST)
{

    $body = '';

    $title = 'FREE EDUCATION FURNITURE<br>SERVICES QUOTE';

    $body .= row_with_title____group_of_single___page_title($title);

    $main_header = 'Project details';

    $body .= row_with_header___group_of_single___main_header($main_header);

    $multiple_inputs = [
        'contact_name' => ['label' => 'Name', 'placeholder' => '*Name'],
        'contact_company' => ['label' => 'Company', 'placeholder' => '*Company'],
        'contact_email' => ['label' => 'Email', 'placeholder' => '*Email'],
        'contact_phone' => ['label' => 'Phone number', 'placeholder' => '*Phone number'],
    ];

    $body .= row_with_header___group_of_multiple_textInputs( $POST, null, $multiple_inputs );

    $header = "Do you need furniture installation services?";

    $radio_array = [
      'name' => 'need_furniture_installation_services',
      'values' => [
        'Classroom furniture installation',
        'Science lab furniture installation',
        'Library installation',
        'Makerspace installation'
        ]
    ];

    $radio_item = [
      'name' => 'need_furniture_installation_services',
      'value' => 'Other',
      'placeholder' => 'Describe the services'
    ];

    $body .= row_with_header___group_of_multiple_radioInputs( $POST, $header, $radio_array );

    $body .= row_with_header___group_of_single___radioInputs_with_text( $POST, null, $radio_item );

    $header = "Do you need furniture moving services?";

    $radio_array = [
      'name' => 'need_furniture_moving_services',
      'values' => [
        'Classroom Relocation Services',
        'School Moving Services',
        'Lab Moving  Services',
        'Library Moving Services'
        ]
    ];

    $radio_item = [
      'name' => 'need_furniture_moving_services',
      'value' => 'Other',
      'placeholder' => 'Describe the services'
    ];

    $body .= row_with_header___group_of_multiple_radioInputs( $POST, $header, $radio_array );

    $body .= row_with_header___group_of_single___radioInputs_with_text( $POST, null, $radio_item );
    
    $header = 'When would you like to get the service?';

    $radio_array = [
      'name' => 'when_get_services',
      'values' => [
        'Don’t have a date',
        'As soon as possible'
        ]
    ];

    $body .= row_with_header___group_of_multiple_radioInputs( $POST, $header, $radio_array );

    $radio_item = [
      'name' => 'when_get_services',
      'value' => 'Choose the date',
      'placeholder' => 'Pick a date'
    ];

    $body .= row_______________group_of_single___radioInputs_with_date( $POST, $radio_item );


    $header = "DO YOU NEED ADDITIONAL SERVICES?";

    $radio_array = [
      'name' => 'need_furniture_additional_services',
      'values' => [
        'Steam cleaning furniture',
        'Disposing furniture'
        ]
    ];

    $radio_item = [
      'name' => 'need_furniture_additional_services',
      'value' => 'Other',
      'placeholder' => 'Describe the services'
    ];

    $body .= row_with_header___group_of_multiple_radioInputs( $POST, $header, $radio_array );

    $body .= row_with_header___group_of_single___radioInputs_with_text( $POST, null, $radio_item );

    $header = 'SERVICE ADDRESS';

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
