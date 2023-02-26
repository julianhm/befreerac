<?php

namespace App\Controllers;

class AboutController extends BaseController
{
    public function index()
    { 
        $dataHeader = [
        'title' => 'Be Free RAC - About'
    ];
    //return view('index');
    echo view('template/header', $dataHeader);
    echo view('about');
    echo view('template/footer');
    }
}
