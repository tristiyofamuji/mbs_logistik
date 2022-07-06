<?php

namespace App\Controllers;
use App\Models\UsersModel;

class Company extends BaseController
{
    public function index()
    {
        $users =  new UsersModel();
        $data = [
            'title' => 'Profil Usaha',
            'user' => $users->first()
        ];
        return view('layout/header', $data)
              . view('layout/menu', $data)
              . view('setting/index')
              . view('layout/footer');
    }
}