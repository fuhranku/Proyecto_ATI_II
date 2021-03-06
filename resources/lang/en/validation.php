<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'The :attribute must be accepted.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute may only contain letters.',
    'alpha_dash' => 'The :attribute may only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute may only contain letters and numbers.',
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'string' => 'The :attribute must be between :min and :max characters.',
        'array' => 'The :attribute must have between :min and :max items.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'date' => 'The :attribute is not a valid date.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => 'The :attribute must be a valid email address.',
    'ends_with' => 'The :attribute must end with one of the following: :values',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file' => 'The :attribute may not be greater than :max kilobytes.',
        'string' => 'The :attribute may not be greater than :max characters.',
        'array' => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'The :attribute must be at least :min characters.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'password' => 'The password is incorrect.',
    'present' => 'The :attribute field must be present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute format is invalid.',
    'uuid' => 'The :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
        'found_us' => [
            'required' => 'You have to select at least one option'
        ],
        'social_media' => [
            'required' => 'You have to select at least one social media'
        ],
        'other_text' => [
            'required' => 'Please, tell us how did you find us'
        ],
        'person_type' => [
            'required' => 'You have to select at least one option'
        ],
        'phone_checkbox_pn' => [
            'required' => 'You have to select at least one option'
        ],
        'country_empresa_pj' => [
            'required' => 'You have to choose your country of origin'
        ],
        'cities_empresa_pj' => [
            'required' => 'You have to choose a city'
        ],
        'phone_checkbox_pj' => [
            'required' => 'You have to select at least one option'
        ],
        'lang' => [
            'required' => 'You have to select a language'
        ],
        'frequency_checkbox' => [
            'required' => 'You have to select an option'
        ],
        'interest_services' => [
            'required' => 'You have to pick at least one service'
        ],
        'news_means' => [
            'required' => 'You have to choose at least one option'
        ],
        'news_means.rrss' => [
            'required' => 'You have to choose at least one social media'
        ],
        'continent_select_sm' => [
            'required' => 'You must choose a continent',
        ],
        'country_select_sm' => [
            'required' => 'You must choose a country',

        ],
        'state_select_sm' => [
            'required' => 'You must choose a state',

        ],
        'city_select_sm' => [
            'required' => 'You must choose a city',
        ],
        'checkbox_dropdown_comfort_sm' => [
            'required' => 'You must choose a comfort',
        ],
        'services_publish_dwelling_dropdown_sm' => [
            'required' => 'You must choose at least one service',
        ],
        'other_services_choice_sm' => [
            'required' => 'You must specify other choice',
        ],
        'input_price' => [
            'required' => 'It must have a price',
        ],
        'other_currency_input' => [
            'required' => 'You must specify your custom currency',
        ],
        'phone_checkbox' => [
            'required' => 'You must pick at least one option',
        ],
        'contact_days_checkbox' => [
            'required' => 'You must pick at least one option',
        ],
        'contact_hour_array' => [
            'required' => 'You must choose a complete contact hour',
        ],
        'continent' =>[
            'required' => 'You must choose a continent',
        ],
        'country' => [
            'required' => 'You must choose a country',
        ],
        'state' => [
            'required' => 'You must choose a state',
        ],
        'city' => [
            'required' => 'You must choose a city',
        ],
        'maximum_price' => [
            'required' => 'You must write a maximum price',
        ],
        'minimum_price' => [
            'required' => 'You must write a minimum price',
        ],
        'quick_countries' => [
            'required' => 'You must choose a country',
        ],
        'quick_states' => [
            'required' => 'You must choose a state',
        ],
        'detailed_continents' => [
            'required' => 'You must choose a continent',
        ],
        'detailed_countries' => [
            'required' => 'You must choose a country',
        ],
        'detailed_states' => [
            'required' => 'You must choose a state',
        ],
        'detailed_cities' => [
            'required' => 'You must choose a city',
        ],
        'detailed_minimum_price' => [
            'required' => 'You must write a maximum price',
        ],
        'detailed_maximum_price' => [
            'required' => 'You must write a minimum price',
        ],
        'applicant_email' => [
            'email' => 'It must be a valid email address',
        ],

    ],
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'applicant_name' => 'name',
        'applicant_lastname' => 'last name',
        'applicant_email' => 'e-mail address',
        'applicant_message' => 'message',
        'nombre_pn' => 'name',
        'apellido_pn' => 'last name',
        'user_id_pn' => 'identification',
        'email_pn' => 'e-mail address',
        'country_pn' => 'country of origin',
        'nombre_empresa_pj' => 'company name',
        'rif_empresa_pj' => 'TIR',
        'address_empresa_pj' => 'company address',
        'nombre_rep_pj' => 'name',
        'apellido_rep_pj' => 'last name',
        'email_rep_pj' => 'e-mail address',
        'email_login' => 'e-mail address',
        'pw_login' => 'password',
        'news_means.mail' => 'e-mail address',
        'news_means.other' => 'other',
        'news_means.facebook_acc' => 'facebook e-mail address',
        'name_contact' => 'name',
        'lastname_contact' => 'last name',
        'email_contact' => 'e-mail address',
    ],

];
