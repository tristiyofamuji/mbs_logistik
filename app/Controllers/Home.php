<?php

namespace App\Controllers;

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
