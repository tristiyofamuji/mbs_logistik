<?php

namespace App\Controllers;
//namespace \Config\Services::session($config);

class Bagihasil extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Bagi Hasil Sopir'
        ];
        return view('layout/header', $data)
              . view('layout/menu', $data)
              . view('bagihasil/index')
              . view('layout/footer');
    }

    function tambah(){
       /*  $data = ['bagihasil' => ci_get('t_keuangan')->result()]; */
        return view('bagihasil/tambah',TRUE);
    }
}
