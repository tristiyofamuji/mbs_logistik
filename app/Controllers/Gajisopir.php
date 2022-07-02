<?php

namespace App\Controllers;

class Gajisopir extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Gaji Sopir'
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
