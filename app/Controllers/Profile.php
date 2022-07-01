<?php

namespace App\Controllers;

class Profile extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Profile'
        ];
        return view('layout/header', $data)
              . view('layout/menu', $data)
              . view('profile')
              . view('layout/footer');
    }
}
