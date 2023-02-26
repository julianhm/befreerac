<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $dataHeader = [
            'title' => 'Be Free RAC'
        ];
        //return view('index');
        echo view('template/header', $dataHeader);
        echo view('index');
        echo view('template/footer');
    }

    public function login()
    {
        $dataHeader = [
            'title' => 'Be Free RAC - Login'
        ];
        //return view('index');
        echo view('template/header', $dataHeader);
        echo view('login');
        echo view('template/footer');
    }

    public function create()
    {
        $dataHeader = [
            'title' => 'Be Free RAC - Registro'
        ];
        //return view('index');
        echo view('template/header', $dataHeader);
        echo view('create');
        echo view('template/footer');
    }
}
