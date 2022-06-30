<?php

namespace App\Controllers;
//namespace \Config\Services::session($config);

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];
        return view('layout/header', $data)
              . view('layout/menu', $data)
              . view('home')
              . view('layout/footer');
    }
}
