<?php

namespace App\Controllers;
use App\Models\KeuanganModel;
use CodeIgniter\Controller;
use App\Models\UsersModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Keuangan extends BaseController
{
    protected $keuangan;
 
    function __construct()
    {
        $this->keuangan = new KeuanganModel();
        $this->users = new UsersModel();
    }

    public function index(){
        $data = [
            'title' => 'Keuangan',
            'konten' => 'keuangan/index',
            'user' => $this->users->first()
        ];
        return view('layout/app', $data);
    }

    public function datagrid()
    {
        $data = [
            'title' => 'Keuangan',
            'user' => $this->users->first()
        ];

        $data['keuangan'] = $this->keuangan->orderBy('id','DESC')->findAll();
        $view = view('keuangan/grid', $data);
        echo json_encode(['tabel' => $view]);
    }
    public function tambah(){
        return view('keuangan/tambah');
    }
    public function edit($id)
    {
        $data['keuangan'] = $this->keuangan->where('id', $id)->first();
        $view = view('keuangan/edit', $data);
        echo json_encode($view);
    }
    public function save($id = ""){
        $validation =  \Config\Services::validation();
        $validation->setRules(['pemasukan' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();
        if($isDataValid){
            
            if($id == ""){
                $this->keuangan->insert([
                    "pemasukan" => $this->request->getPost('pemasukan'),
                    "pengeluaran" => $this->request->getPost('pengeluaran'),
                    "tgl_masuk" => $this->request->getPost('tgl_masuk'),
                    "tgl_keluar" => $this->request->getPost('tgl_keluar'),
                    "keterangan" => $this->request->getPost('keterangan')
                ]);
                $data = ['type' => 'success', 'msg' => 'Data berhasi disimpan'];
                echo json_encode($data);
            }else{
                $this->keuangan->update($id, [
                    "pemasukan" => $this->request->getPost('pemasukan'),
                    "pengeluaran" => $this->request->getPost('pengeluaran'),
                    "tgl_masuk" => $this->request->getPost('tgl_masuk'),
                    "tgl_keluar" => $this->request->getPost('tgl_keluar'),
                    "keterangan" => $this->request->getPost('keterangan'),
                ]);
                $data = ['type' => 'success', 'size' => 'mini', 'text' => 'Data berhasi diupdate'];
                echo json_encode($data);
            }
        }
    }

    function delete($id){
        $data = $this->keuangan->delete($id);
        if($data){
            $data = ['type' => 'success', 'size' => 'mini', 'text' => 'Data berhasil di hapus'];
        echo json_encode($data);
        }
    }
    
}
