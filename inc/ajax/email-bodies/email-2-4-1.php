<?php

function make_body_2_4_1($POST)
{

    $body = '';

    $title = 'FREE STORAGE &<br> LOGISTICS QUOTE';

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

    $header = 'DO YOU NEED RIDI (Receive/Inspect/Deliver/Install) INCLUDED or ONLY STORAGE SERVICES?';

    $radio_array = [
        'name' => 'do_you_need_ridi',
        'values' => [
            'INCLUDE RIDI',
            'ONLY STORAGE SERVICES',
        ],
    ];

    $body .= row_with_header___group_of_multiple_radioInputs($POST, $header, $radio_array);

    $header = 'ENTER PICK-UP ADDRESS';

    $array_of_fields = [
        'address' => [
            'label' => '*Pick-up Address',
            'name' => 'contact_address_pick_up',
            'is_required' => true,
        ],
        'city' => [
            'label' => '*Pick-up City',
            'name' => 'contact_city_pick_up',
            'is_required' => false,
        ],
        'state' => [
            'label' => '*State',
            'name' => 'contact_state_pick_up',
            'is_required' => false,
        ],
        'zip_code' => [
            'label' => '*Zip Code',
            'name' => 'contact_zip_code_pick_up',
            'is_required' => false,
        ],
    ];

    $body .= row_with_header___group_of_multiple_textInputs____addresses_custom($POST, $header, $array_of_fields);

    $header = 'ENTER DELIVERY ADDRESS';

    $array_of_fields = [
        'address' => [
            'label' => '*Delivery Address',
            'name' => 'contact_address_delivery',
            'is_required' => true,
        ],
        'city' => [
            'label' => '*Delivery City',
            'name' => 'contact_city_delivery',
            'is_required' => false,
        ],
        'state' => [
            'label' => '*State',
            'name' => 'contact_state_delivery',
            'is_required' => false,
        ],
        'zip_code' => [
            'label' => '*Zip Code',
            'name' => 'contact_zip_code_delivery',
            'is_required' => false,
        ],
    ];

    $body .= row_with_header___group_of_multiple_textInputs____addresses_custom($POST, $header, $array_of_fields);

    $header = 'HOW LONG DO YOU NEED TO STORE YOUR GOODS?';

    $radio_array = [
        'name' => 'how_long_store_goods',
        'values' => [
            'Long Term',
            'Short Term',
            'Don\'t Know',
        ],
    ];

    $body .= row_with_header___group_of_multiple_radioInputs($POST, $header, $radio_array);

    $header = 'SELECT YOUR STORAGE DATES (optional)';

    $body .= row_with_header___group_of_single___header($header);

    $dataInputData = [
        'name' => 'start_date',
        'label' => 'Start Date:',
        'placeholder' => 'Pick a start date',
    ];

    $body .= row_______________group_of_single___dateInput____date($POST, $dataInputData);

    $dataInputData = [
        'name' => 'end_date',
        'label' => 'End Date:',
        'placeholder' => 'Pick a end date',
    ];

    $body .= row_______________group_of_single___dateInput____date($POST, $dataInputData);

    $header = 'SELECT TYPES OF GOODS TO BE STORED';

    $types_of_furniture_to_install = [
        'input_type_table' => ['label' => 'TABLE', 'placeholder' => 'Describe #size of table,desks,etc.'],
        'input_type_chair' => ['label' => 'CHAIR', 'placeholder' => 'Describe #of units,chair,sofa,etc.'],
        'input_type_cubicles' => ['label' => 'CUBICLES', 'placeholder' => 'Describe  #of units,etc.'],
        'input_type_storage_racking' => ['label' => 'STORAGE & RACKING', 'placeholder' => 'Describe  #of units,type of rack,etc.'],
        'input_type_electronocs' => ['label' => 'ELECTRONICS', 'placeholder' => 'Describe  #of units,etc.'],
        'input_type_miscellaneous' => ['label' => 'MISCELLANEOUS', 'placeholder' => 'Describe...'],
    ];

    $body .= row_with_header___group_of_multiple_checkboxInputs_with_text($POST, $header, $types_of_furniture_to_install);

    $header = "WHAT IS THE ESTIMATED VALUE OF STORED GOODS?";

    $pairs_radioInput_array_with_text = [
        ['name' => 'estimated_value_of_goods', 'value_only' => 'Don’t know', 'value_text' => 'Estimate Value', 'placeholder' => 'Value'],
    ];

    $body .= row_with_header___group_of_multiple_pair_radioInputs_with_text($POST, $header, $pairs_radioInput_array_with_text);

    $header = 'TYPE BILLING ADDRESS';

    $radio_array = [
        'name' => 'type_billing_address',
        'values' => [
            'Same as pick-up address',
            'Same as delivery address',
            'Enter new  address',
        ],
    ];

    $body .= row_with_header___group_of_multiple_radioInputs($POST, $header, $radio_array);

    $header = 'INSTALLATION ADDRESS';

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
