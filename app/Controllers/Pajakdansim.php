<?php

namespace App\Controllers;
use App\Models\UsersModel;

class Pajakdansim extends BaseController
{
    /* protected $keuangan; */
 
    function __construct()
    {
        /* $this->keuangan = new KeuanganModel(); */
        $this->users = new UsersModel();
    }
    
    public function index()
    {
        $data = [
            'title' => 'Pajak dan SIM',
            'konten' => 'pajakdansim/index',
            'user' => $this->users->first()
        ];
        return view('layout/app', $data);
    }

    public function datagrid()
    {
        $data = [
            'title' => 'Pajak dan SIM',
            'user' => $this->users->first()
        ];

        $data['keuangan'] = $this->keuangan->orderBy('id','DESC')->findAll();
        $view = view('pajakdansim/grid', $data);
        echo json_encode(['tabel' => $view]);
    }

    function tambah(){
        $data = ['keuangan' => ci_get('t_keuangan')->result()];
        return view('keuangan/tambah',TRUE);
    }
}