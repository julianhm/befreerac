<?php

namespace App\Controllers;

class OfficeController extends BaseController
{
    public function index()
    {
        $dataHeader = [
            'title' => 'Be Free RAC'
        ];
        //return view('index');
        echo view('template/header', $dataHeader);
        echo view('office');
        echo view('template/footer');
    }
}
