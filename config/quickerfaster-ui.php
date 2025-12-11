<?php

return [
    /*
    |--------------------------------------------------------------------------
    | QuickerFaster UI Configuration
    |--------------------------------------------------------------------------
    |
    | This file contains the configuration for QuickerFaster Laravel UI package.
    |
    */

    'version' => '1.0.0',

    'components' => [
        'enabled' => [
            'counter' => true,
            'todo_list' => true,
            'profile_update' => true,
            'password_update' => true,
        ],
        'default_styles' => 'bootstrap',
        'icon_set' => 'bootstrap-icons',
    ],

    'layout' => [
        'use_navbar' => true,
        'use_footer' => true,
        'navbar_color' => 'primary',
        'footer_color' => 'light',
    ],

    'features' => [
        'toast_notifications' => true,
        'confirm_dialogs' => true,
        'loading_indicators' => true,
    ],
];