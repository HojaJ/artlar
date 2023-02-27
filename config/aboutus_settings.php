<?php
return [
    'aboutus' => [
        'title' => 'Contact Us',
        'desc'  => 'Edit Contact Us Page',
        'icon'  => 'fas fa-cube',

        'elements' => [
            [
                'type'  => 'aboutus', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'aboutus', // unique name for field
                'label' => 'Contact Us Page', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '', // default value if you want
            ],
        ],
    ],
];
