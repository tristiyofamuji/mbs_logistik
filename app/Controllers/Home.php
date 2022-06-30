<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
       /*  echo view('layouts/header');
        echo view('pages/home');
        echo view('layouts/footer'); */
        return view('auth/login');
    }
}
