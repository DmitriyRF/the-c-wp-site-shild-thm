<?php

function make_body_2_1_1($POST)
{

    $body = '';

    $title = 'Free Furniture <br> Installation Quote';

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

    $header = 'Type of installation service needed: ';

    $radio_array_with_tooltip = [
        [
            'name' => 'installation_service_type',
            'label' => 'C-SERV TURNKEY INSTALLATION SERVICE',
            'value' => 'C-SERV TURNKEY INSTALLATION SERVICE',
            'tooltip' => 'The C-Serv Turnkey Installation Service Plan provides end-to-end project management,
          including coordinating (and procuring, as necessary) all sub-contractor services for your
          project. We manage all phases start to finish to ensure you or your client’s full
          satisfaction.',
        ],
        [
            'name' => 'installation_service_type',
            'label' => 'C-SERV STANDARD INSTALLATION SERVICE',
            'value' => 'C-SERV STANDARD INSTALLATION SERVICE',
            'tooltip' => 'The C-Serv Standard Installation Service Plan delivers expert installation and furniture
          assembly services working under your direction. You tell us what you need and when you
          need it, we’ll provide experienced, expert services.',
        ],
    ];

    $body .= row_______________group_of_multiple_radioInputs_with_tooltip($POST, $header, $radio_array_with_tooltip);

    $header = 'Types of furniture to install (Select all that applies): ';

    $types_of_furniture_to_install = [
        'input_type_modular_furniture' => ['label' => 'Modular Furniture', 'placeholder' => 'Describe ( # of units, desks, etc. )'],
        'input_type_system_furniture' => ['label' => 'System Furniture', 'placeholder' => 'Describe (the furniture brand, #, etc.)'],
        'input_type_cubicles_partition_walls' => ['label' => 'Cubicles and Partition Walls', 'placeholder' => 'Describe ( # of units, desks, etc. )'],
        'input_type_conference_room_furniture' => ['label' => 'Conference Room Furniture', 'placeholder' => 'Describe (size of table, brand, etc.)'],
        'input_type_casework_lab_furniture' => ['label' => 'Casework or Lab Furniture', 'placeholder' => 'Describe (worksurface material, upper...)'],
        'input_type_industrial_worksrations' => ['label' => 'Industrial Workstations', 'placeholder' => 'Describe (# of units, conveyors, etc.)'],
        'input_type_trade_show_setup' => ['label' => 'Trade Show Setup', 'placeholder' => 'Describe (square ft of booth, furniture ...)'],
        'input_type_srorage_racking_system' => ['label' => 'Storage & Racking Systems', 'placeholder' => 'Describe (# of units, material, type ...)'],
        'input_type_seating_systems' => ['label' => 'Seating Systems', 'placeholder' => 'Describe (the furniture brand, #, etc.)'],
        'input_type_other' => ['label' => 'Others', 'placeholder' => 'Describe (# of units, material, type ...)'],
    ];

    $body .= row_with_header___group_of_multiple_checkboxInputs_with_text($POST, $header, $types_of_furniture_to_install);

    $header = "Are you able to provide assembly instructions?";

    $pairs_radioInput_array_with_text = [
        ['name' => 'provide_assembly_instructions', 'value_only' => 'YES', 'value_text' => 'NO', 'placeholder' => 'Make and model of the furniture'],
    ];

    $body .= row_with_header___group_of_multiple_pair_radioInputs_with_text($POST, $header, $pairs_radioInput_array_with_text);

    $header = 'Would you like any additional services?';

    $checkbox_array = [
        'pick_up_and_deliver_furniture' => 'Pick up and deliver furniture',
        'disassemble_existing_furniture' => 'Disassemble existing furniture',
        'no_additional_service_needed' => 'No additional service needed',
        'haul_away_existing_furniture' => 'Haul away existing furniture',
    ];

    $body .= row_with_header___group_of_multiple_checkboxInputs($POST, $header, $checkbox_array);

    $header = null;

    $types_of_furniture_to_install = [
        'additional_services_other' => ['label' => 'Other', 'placeholder' => 'Describe the service request'],
    ];

    $body .= row_with_header___group_of_multiple_checkboxInputs_with_text($POST, $header, $types_of_furniture_to_install);

    $header = "When would you like the furniture assembled?";

    $radio_array = [
        'name' => 'furniture_assembled_date',
        'values' => [
            'Don’t have a date',
            'As soon as possible',
        ],
    ];

    $body .= row_with_header___group_of_multiple_radioInputs($POST, $header, $radio_array);

    $dataInputData = [
        'name' => 'install_date',
        'label' => 'Choose the date:',
        'placeholder' => 'Pick a date',
    ];

    $body .= row_______________group_of_single___dateInput____date($POST, $dataInputData);

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
