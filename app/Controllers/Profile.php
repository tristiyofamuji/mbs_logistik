<?php

namespace App\Controllers;
use App\Models\UsersModel;

class Profile extends BaseController
{
    public function index()
    {
        $users =  new UsersModel();
        $data = [
            'title' => 'Profile',
            'user' => $users->first()
        ];

        return view('layout/header', $data)
              . view('layout/menu', $data)
              . view('profile/index', $data)
              . view('layout/footer');
    }
}
