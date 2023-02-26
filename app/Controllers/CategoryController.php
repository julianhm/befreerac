<?php

namespace App\Controllers;

class CategoryController extends BaseController
{
    public function index()
    {
        $dataHeader = [
            'title' => 'Be Free RAC'
        ];
        //return view('index');
        echo view('template/header', $dataHeader);
        echo view('category');
        echo view('template/footer');
    }
}
