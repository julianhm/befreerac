<?php
defined('BASEPATH') or exit('No direct script access allowed');

/* ----------------------------------------------------------------------------
/* HybridAuth Guide: http://hybridauth.github.io/hybridauth/userguide.html
/* ------------------------------------------------------------------------- */

$config = [
    // For godady Shared Hosting Server uncomment the line below
    // Please update the callback url too
    'Hauth_base_url' => 'social_auth/endpoint',

    // Please comment this if you have uncommented the above
    // 'Hauth_base_url' => 'social_auth/endpoint',

    'providers' => [
        'Google' => [
            'enabled' => false,
            'keys'    => ['id' => '', 'secret' => ''],
        ],

        'Facebook' => [
            'enabled' => false,
            'keys'    => ['id' => '', 'secret' => ''],
            'scope'   => 'email, public_profile, user_birthday',
        ],

        'Twitter' => [
            'enabled' => false,
            'keys'    => ['key' => '', 'secret' => ''],
        ],

        'Yahoo' => [
            'enabled' => false,
            'keys'    => ['id' => '', 'secret' => ''],
        ],

        'Live' => [
            'enabled' => false,
            'keys'    => ['id' => '', 'secret' => ''],
        ],

        'MySpace' => [
            'enabled' => false,
            'keys'    => ['key' => '', 'secret' => ''],
        ],

        'OpenID' => [
            'enabled' => false,
        ],

        'LinkedIn' => [
            'enabled' => false,
            'keys'    => ['key' => '', 'secret' => ''],
        ],

        'Foursquare' => [
            'enabled' => false,
            'keys'    => ['id' => '', 'secret' => ''],
        ],

        'AOL' => [
            'enabled' => false,
        ],
    ],

    'debug_mode' => false,

    'debug_file' => APPPATH . 'logs/hybridauth.php',
];