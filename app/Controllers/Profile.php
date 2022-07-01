<?php

namespace App\Controllers;

class Profile extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];
        return view('layout/header', $data)
              . view('layout/menu', $data)
              . view('profile')
              . view('layout/footer');
    }
}
