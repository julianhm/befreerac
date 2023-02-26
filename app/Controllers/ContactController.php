<?php

namespace App\Controllers;

class ContactController extends BaseController
{
    public function index()
    {
        $dataHeader = [
            'title' => 'Be Free RAC'
        ];
        //return view('index');
        echo view('template/header', $dataHeader);
        echo view('contact');
        echo view('template/footer');
    }
}
