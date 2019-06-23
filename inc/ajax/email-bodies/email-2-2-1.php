<?php

function make_body_2_2_1($POST)
{

    $body = '';

    $title = 'Free Workplace <br> Reconfiguration Quote';

    $body .= row_with_title____group_of_single___page_title($title);

    $main_header = 'Send project details';

    $body .= row_with_header___group_of_single___main_header( $main_header );

    $multiple_inputs = [
        'contact_name' => ['label' => 'Name', 'placeholder' => '*Name'],
        'contact_company' => ['label' => 'Company', 'placeholder' => '*Company'],
        'contact_email' => ['label' => 'Email', 'placeholder' => '*Email'],
        'contact_phone' => ['label' => 'Phone number', 'placeholder' => '*Phone number'],
    ];

    $body .= row_with_header___group_of_multiple_textInputs($POST, null, $multiple_inputs);

    $header = 'Types of SERVICES REQUESTED (Select all that applies): ';

    $types_of_furniture_to_install = [
        'input_type_move_furniture_within_campus' => ['label' => 'Move Furniture within Campus', 'placeholder' => 'Add Notes'],
        'input_type_pick_up_and_deliver_furniture' => ['label' => 'Pick up and Deliver Furniture', 'placeholder' => 'Add Notes'],
        'input_type_assemble_install_new_furniture' => ['label' => 'Assemble/Install New Furniture', 'placeholder' => 'Add Notes'],
        'input_type_coordinate_with_service_providers' => ['label' => 'Coordinate with Service Providers', 'placeholder' => 'List here (property manager, electrician, etc.)'],
        'input_type_disassemble_old_furniture' => ['label' => 'Disassemble Old Furniture', 'placeholder' => 'Add Notes'],
        'input_type_haul_away_old_furniture' => ['label' => 'Haul Away Old Furniture', 'placeholder' => 'Add Notes'],
        'input_type_store_old_furniture_office_equipment' => ['label' => 'Store Old Furniture & Office Equipment', 'placeholder' => 'Add Notes (long term, short term, etc.)'],
        'input_type_help_designing_new_office_layout' => ['label' => 'Help Designing New Office Layout', 'placeholder' => 'Add Notes'],
        'input_type_provide_furniture_steam_cleaning' => ['label' => 'Provide Furniture Steam Cleaning', 'placeholder' => 'Add Notes'],
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

    $header = 'When would you like the office reconfiguration happen?';

    $radio_array = [
        'name' => 'when_office_reconfiguration_happen',
        'values' => [
            'Don’t have a date',
            'As soon as possible',
        ],
    ];

    $body .= row_with_header___group_of_multiple_radioInputs($POST, $header, $radio_array);

    $radio_item = [
        'name' => 'when_office_reconfiguration_happen',
        'value' => 'Choose the date',
        'placeholder' => 'Pick a date',
    ];

    $body .= row_______________group_of_single___radioInputs_with_date($POST, $radio_item);

    $header = 'What is the best time in the day to install the furniture?';

    $checkbox_array = [
        'time_to_install_early_morning' => 'Early Morning (before 9am)',
        'time_to_install_morning' => 'Morning (9am - 12 pm)',
        'time_to_install_afternoon' => 'Afternoon (12pm - 3pm)',
        'time_to_install_late_afternoon' => 'Late Afternoon (3pm - 6pm)',
        'time_to_install_evening' => 'Evening (after 6pm)',
        'time_to_install_no_preference' => 'No preference',
    ];

    $body .= row_with_header___group_of_multiple_checkboxInputs($POST, $header, $checkbox_array);

    $header = 'Installation Address:';

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
