<?php

function make_body_2_3_1($POST)
{

    $body = '';

    $title = 'Free Workplace <br> Moving Quote';

    $body .= row_with_title____group_of_single___page_title( $title);

    $main_header = 'Send project details';

    $body .= row_with_header___group_of_single___main_header( $main_header);

    $multiple_inputs = [
        'contact_name' => ['label' => 'Name', 'placeholder' => '*Name'],
        'contact_company' => ['label' => 'Company', 'placeholder' => '*Company'],
        'contact_email' => ['label' => 'Email', 'placeholder' => '*Email'],
        'contact_phone' => ['label' => 'Phone number', 'placeholder' => '*Phone number'],
    ];

    $body .= row_with_header___group_of_multiple_textInputs($POST, null, $multiple_inputs);

    $header = 'TYPE OF MOVING SERVICES NEEDED: ';

    $radio_array_with_tooltip = [
        [
            'name' => 'moving_services_needed',
            'label' => 'MOVING TO A NEW LOCATION',
            'value' => 'MOVING TO A NEW LOCATION',
            'tooltip' => 'C-Serv’s Standard Moving Plan supplies a labor-only
              commercial services team. Additional services, such as RDI,
              can be requested during quote stage.',
        ],
        [
            'name' => 'moving_services_needed',
            'label' => 'MOVING WITHIN CAMPUS',
            'value' => 'MOVING WITHIN CAMPUS',
            'tooltip' => 'Our Turnkey Moving Services handles all details for your
              in-campus move – to another building, up three flights,
              or down the hall – so your relocation is painless and smooth.',
        ],
    ];

    $body .= row_______________group_of_multiple_radioInputs_with_tooltip($POST, $header, $radio_array_with_tooltip);

    $header = 'Types of SERVICES REQUESTED (Select all that applies): ';

    $types_of_furniture_to_install = [
        'input_type_corporate_move' => ['label' => 'CORPORATE MOVE', 'placeholder' => 'Describe'],
        'input_type_office_move' => ['label' => 'OFFICE MOVE', 'placeholder' => 'Describe'],
        'input_type_government_move' => ['label' => 'GOVERNMENT MOVE', 'placeholder' => 'Describe'],
        'input_type_industrial_move' => ['label' => 'INDUSTRIAL MOVE', 'placeholder' => 'Describe'],
        'input_type_it_move' => ['label' => 'IT MOVE', 'placeholder' => 'Describe'],
        'input_type_lab_medical_equipment_move' => ['label' => 'LAB / MEDICAL EQUIPMENT MOVE', 'placeholder' => 'Describe'],
        'input_type_other' => ['label' => 'OTHER', 'placeholder' => 'Describe'],
    ];

    $body .= row_with_header___group_of_multiple_checkboxInputs_with_text($POST, $header, $types_of_furniture_to_install);

    $header = 'Is there a freight elevator?';

    $radio_array = [
        'name' => 'freight_elevator',
        'values' => [
            'YES',
            'NO',
        ],
    ];

    $body .= row_with_header___group_of_multiple_radioInputs___one_line_2_from_3($POST, $header, $radio_array);

    $header = "Are you able to provide assembly instructions?";

    $pairs_radioInput_array_with_text = [
        ['name' => 'provide_assembly_instructions', 'value_only' => 'YES', 'value_text' => 'NO', 'placeholder' => 'Make and model of the furniture'],
    ];

    $body .= row_with_header___group_of_multiple_pair_radioInputs_with_text($POST, $header, $pairs_radioInput_array_with_text);

    $header = 'Would you like any additional services?';

    $checkbox_array = [
        'checkbox_lease_end_moving_services' => 'Lease-end moving services',
        'checkbox_disassemble_existing_furniture' => 'Disassemble existing furniture',
        'checkbox_steam_clean_existing_furniture' => 'Steam clean existing furniture',
        'checkbox_office_layout_design_services' => 'Office layout design services',
    ];

    $body .= row_with_header___group_of_multiple_checkboxInputs($POST, $header, $checkbox_array);

    $header = null;

    $types_of_furniture_to_install = [
        'checkbox_other' => ['label' => 'Other', 'placeholder' => 'Describe the service request'],
    ];

    $body .= row_with_header___group_of_multiple_checkboxInputs_with_text($POST, $header, $types_of_furniture_to_install);

    $header = 'When would you like to move?';

    $radio_array = [
        'name' => 'when_move_happen',
        'values' => [
            'Don’t have a date',
            'As soon as possible',
        ],
    ];

    $body .= row_with_header___group_of_multiple_radioInputs($POST, $header, $radio_array);

    $radio_item = [
        'name' => 'when_move_happen',
        'value' => 'Choose the date',
        'placeholder' => 'Pick a date',
    ];

    $body .= row_______________group_of_single___radioInputs_with_date($POST, $radio_item);

    $header = 'WHERE ARE YOU MOVING TO?';

    $array_of_fields = [
        'address' => [
            'label' => '*Address to...',
            'name' => 'contact_address_to',
            'is_required' => true,
        ],
        'city' => [
            'label' => '*City',
            'name' => 'contact_city_to',
            'is_required' => true,
        ],
        'state' => [
            'label' => '*State',
            'name' => 'contact_state_to',
            'is_required' => true,
        ],
        'zip_code' => [
            'label' => '*Zip Code',
            'name' => 'contact_zip_code_to',
            'is_required' => true,
        ],
    ];

    $body .= row_with_header___group_of_multiple_textInputs____addresses_custom($POST, $header, $array_of_fields);

    $header = 'WHERE ARE YOU MOVING FROM?';

    $array_of_fields = [
        'address' => [
            'label' => '*Address from...',
            'name' => 'contact_address_from',
            'is_required' => true,
        ],
        'city' => [
            'label' => '*City',
            'name' => 'contact_city_from',
            'is_required' => true,
        ],
        'state' => [
            'label' => '*State',
            'name' => 'contact_state_from',
            'is_required' => true,
        ],
        'zip_code' => [
            'label' => '*Zip Code',
            'name' => 'contact_zip_code_from',
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
