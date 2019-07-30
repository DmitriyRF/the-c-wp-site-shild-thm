<?php

function make_body_3_6_1($POST)
{

    $body = '';

    $title = 'FREE HEALTHCARE<br>FURNITURE SERVICES QUOTE';

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

    $header = 'NEED HEALTHCARE FURNITURE INSTALLATION SERVICES?';

    $types_of_furniture_to_install = [
        'input_type_hospital_room_installation' => ['label' => 'Hospital Room Installation', 'placeholder' => 'Describe...'],
        'input_type_medical_laboratory_installation' => ['label' => 'Medical Laboratory Installation', 'placeholder' => 'Describe...'],
        'input_type_treatment_area_installation' => ['label' => 'Treatment Area Installation', 'placeholder' => 'Describe...'],
        'input_type_other' => ['label' => 'Other', 'placeholder' => 'Describe...'],
    ];

    $body .= row_with_header___group_of_multiple_checkboxInputs_with_text($POST, $header, $types_of_furniture_to_install);

    $header = 'Need to move healthcare facilities?';

    $radio_array = [
        'name' => 'need_move_healthcare_facilities',
        'values' => [
            'YES',
            'NO',
        ],
    ];

    $body .= row_with_header___group_of_multiple_radioInputs($POST, $header, $radio_array);

    $header = 'When would you like to get the service ?';

    $radio_array = [
        'name' => 'when_get_service',
        'values' => [
            'Don’t have a date',
            'As soon as possible',
        ],
    ];

    $body .= row_with_header___group_of_multiple_radioInputs($POST, $header, $radio_array);

    $radio_item = [
        'name' => 'when_get_service',
        'value' => 'Choose the date',
        'placeholder' => 'Pick a date',
    ];

    $body .= row_______________group_of_single___radioInputs_with_date($POST, $radio_item);

    $header = "Would you like additional service?";

    $radio_array = [
        'name' => 'would_you_like_additional_service',
        'values' => [
            'Steam Cleaning Service',
            'Disposal',
        ],
    ];

    $radio_item = [
        'name' => 'would_you_like_additional_service',
        'value' => 'Other',
        'placeholder' => 'Describe the service',
    ];

    $body .= row_with_header___group_of_multiple_radioInputs($POST, $header, $radio_array);

    $body .= row_with_header___group_of_single___radioInputs_with_text($POST, null, $radio_item);

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
