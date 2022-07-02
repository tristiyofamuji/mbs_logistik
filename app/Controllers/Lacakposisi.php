<?php

namespace App\Controllers;
//namespace \Config\Services::session($config);

class Lacakposisi extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Lacak Posisi Truck'
        ];
        return view('layout/header', $data)
              . view('layout/menu', $data)
              . view('lacakposisi/index')
              . view('layout/footer');
    }

    function tambah(){
        $data = ['keuangan' => ci_get('t_keuangan')->result()];
        return view('keuangan/tambah',TRUE);
    }
}
