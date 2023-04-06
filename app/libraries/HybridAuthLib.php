<?php

defined('BASEPATH') or exit('No direct script access allowed');

// require_once( FCPATH.'vendor/hybridauth/hybridauth/hybridauth/Hybrid/Auth.php' );

use Hybrid\Hybrid\Auth;

class HybridAuthLib extends Hybrid_Auth
{
    public function __construct($config = [])
    {
        $ci                 = &get_instance();
        $config['base_url'] = base_url((config_item('index_page') ? config_item('index_page') : 'index.php/') . $config['Hauth_base_url']);
        parent::__construct($config);
    }

    public static function providerEnabled($provider)
    {
        return isset(parent::$config['providers'][$provider]) && parent::$config['providers'][$provider]['enabled'];
    }

    public static function serviceEnabled($service)
    {
        return self::providerEnabled($service);
    }
}
