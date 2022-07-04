<?php

namespace App\Controllers;
use App\Models\UsersModel;

class Helper extends BaseController
{
    public function index()
    {
        $users =  new UsersModel();
        $data = [
            'title' => 'Helper',
            'user' => $users->first()
        ];
        return view('layout/header', $data)
              . view('layout/menu', $data)
              . view('helper/index')
              . view('layout/footer');
    }
}