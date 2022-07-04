<?php

namespace App\Controllers;
use App\Models\UsersModel;

class Maintenancetruck extends BaseController
{
    public function index()
    {
        $users =  new UsersModel();
        $data = [
            'title' => 'Maintenance Truck',
            'user' => $users->first()
        ];
        return view('layout/header', $data)
              . view('layout/menu', $data)
              . view('maintenancetruck/index')
              . view('layout/footer');
    }

    function tambah(){
        $data = ['keuangan' => ci_get('t_keuangan')->result()];
        return view('keuangan/tambah',TRUE);
    }
}
