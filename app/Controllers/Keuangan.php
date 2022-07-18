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

    public function index()
    {
        $data = [
            'title' => 'Keuangan',
            'user' => $this->users->first()
        ];

        $data['keuangan'] = $this->keuangan->orderBy('id','DESC')->findAll();
        return view('layout/header', $data)
              . view('layout/menu', $data)
              . view('keuangan/index',$data)
              . view('layout/footer');
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
            dump($id);
            if($id == ""){
                $this->keuangan->insert([
                    "pemasukan" => $this->request->getPost('pemasukan'),
                    "pengeluaran" => $this->request->getPost('pengeluaran'),
                    "tgl_masuk" => $this->request->getPost('tgl_masuk'),
                    "tgl_keluar" => $this->request->getPost('tgl_keluar'),
                    "keterangan" => $this->request->getPost('keterangan')
                ]);
                session()->setFlashdata('success', 'Proses tambah data berhasil.');
                return redirect()->to('/keuangan');
            }else{
                $this->keuangan->update($id, [
                    "pemasukan" => $this->request->getPost('pemasukan'),
                    "pengeluaran" => $this->request->getPost('pengeluaran'),
                    "tgl_masuk" => $this->request->getPost('tgl_masuk'),
                    "tgl_keluar" => $this->request->getPost('tgl_keluar'),
                    "keterangan" => $this->request->getPost('keterangan'),
                ]);
                session()->setFlashdata('success', 'Proses edit data berhasil.');
                return redirect()->to('/keuangan');
            }
        }
    }

    function delete($id){
        $this->keuangan->delete($id);
        return redirect('keuangan')->with('success','Data Berhasil di Delete');
    }
    
    public function edits($id)
    {
        $keuangan = new KeuanganModel();
        $data['keuangan'] = $keuangan->where('id', $id)->first();
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'id' => 'required',
            'pemasukan' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        if($isDataValid){
            $this->keuangan->update($id, [
                "pemasukan" => $this->request->getPost('pemasukan'),
                "pengeluaran" => $this->request->getPost('pengeluaran'),
                "tgl_masuk" => $this->request->getPost('tgl_masuk'),
                "tgl_keluar" => $this->request->getPost('tgl_keluar'),
                "keterangan" => $this->request->getPost('keterangan'),
            ]);
            return redirect()->to('/keuangan');
        }
        return view('keuangan/edit', $data);
    }
}
