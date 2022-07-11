<?php

namespace App\Controllers;
use App\Models\KeuanganModel;
use CodeIgniter\Controller;
//namespace \Config\Services::session($config);
use App\Models\UsersModel;

class Keuangan extends BaseController
{
    public function index()
    {
        $users =  new UsersModel();
        $data = [
            'title' => 'Keuangan',
            'user' => $users->first()
        ];
        $model = new KeuanganModel();
 
        $data['keuangan'] = $model->orderBy('id','DESC')->findAll();
        return view('layout/header', $data)
              . view('layout/menu', $data)
              . view('keuangan/index',$data)
              . view('layout/footer');
    }

    function create(){
        return view('keuangan/tambah');
    }
    function store(){
        /* if (!$this->validate([
                'pemasukan' => [
                    'rules' => 'required|min_length[12]|max_length[100]',
                    'errors' => [
                        'required' => '{field} Harus diisi'
                    ]
                ],
                'pengeluaran' => [
                    'rules' => 'required|min_length[12]|max_length[100]',
                    'errors' => [
                        'required' => '{field} Harus diisi',
                    ]
                ]
            ])) {
                session()->setFlashdata('error', 'gagal menambah data');
                return redirect()->to('/keuangan')->withInput();
            } */         
        $keuangan = new KeuanganModel();
        $keuangan->insert([
            'pemasukan' => $this->request->getVar('pemasukan'),
            'pengeluaran'  => $this->request->getVar('pengeluaran'),
            'tgl_masuk' => $this->request->getVar('tgl_masuk'),
            'tgl_keluar' => $this->request->getVar('tgl_keluar'),
            'keterangan' => $this->request->getVar('keterangan'),
            ]);

        session()->setFlashdata('success', 'Proses tambah data berhasil.');
        return redirect()->to('/keuangan');
    }
}
