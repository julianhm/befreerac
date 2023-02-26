<?php

namespace App\Controllers;

class ListProductController extends BaseController
{
    public function index()
    {
        $dataHeader = [
            'title' => 'Be Free RAC'
        ];
        //return view('index');
        echo view('template/header', $dataHeader);
        echo view('listproduct');
        echo view('template/footer');
    }
}
