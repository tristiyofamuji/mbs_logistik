<?php

namespace App\Controllers;
use App\Models\UsersModel;

class Gajisopir extends BaseController
{
    public function index()
    {
        $users =  new UsersModel();
        $data = [
            'title' => 'Gaji Sopir',
            'user' => $users->first()
        ];
        return view('layout/header', $data)
              . view('layout/menu', $data)
              . view('gajisopir/index')
              . view('layout/footer');
    }

    function tambah(){
       /*  $data = ['bagihasil' => ci_get('t_keuangan')->result()]; */
        return view('bagihasil/tambah',TRUE);
    }
}
