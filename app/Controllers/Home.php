<?php

namespace App\Controllers;
use App\Models\UsersModel;

class Home extends BaseController
{
    public function index()
    {
        $users =  new UsersModel();
        $data = [
            'title' => 'Home',
            'user' => $users->first()
        ];
        return view('layout/header', $data)
              . view('layout/menu', $data)
              . view('home')
              . view('layout/footer');
    }
}
