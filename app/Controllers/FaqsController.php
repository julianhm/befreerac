<?php

namespace App\Controllers;

class FaqsController extends BaseController
{
    public function index()
    {
        $dataHeader = [
            'title' => 'Be Free RAC'
        ];
        //return view('index');
        echo view('template/header', $dataHeader);
        echo view('faqs');
        echo view('template/footer');
    }
}
