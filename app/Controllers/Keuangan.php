<?php

namespace App\Controllers;
//namespace \Config\Services::session($config);

class Keuangan extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Keuangan'
        ];
        return view('layout/header', $data)
              . view('layout/menu', $data)
              . view('keuangan/index')
              . view('layout/footer');
    }

    function tambah(){
        $data = ['keuangan' => ci_get('t_keuangan')->result()];
        return view('keuangan/tambah',TRUE);
    }
}
