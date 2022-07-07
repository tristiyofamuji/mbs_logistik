<?php

namespace App\Controllers;
use App\Models\UsersModel;

class Pajakdansim extends BaseController
{
    public function index()
    {
        $users =  new UsersModel();
        $data = [
            'title' => 'Pajak dan SIM',
            'user' => $users->first()
        ];
        return view('layout/header', $data)
              . view('layout/menu', $data)
              . view('pajakdansim/index')
              . view('layout/footer');
    }

    function tambah(){
        $data = ['keuangan' => ci_get('t_keuangan')->result()];
        return view('keuangan/tambah',TRUE);
    }
}