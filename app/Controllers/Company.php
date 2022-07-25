<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UsersModel;
use App\Models\ProfilModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Company extends BaseController
{
    function __construct()
    {
        $this->id = session('LT@id');
        $this->users = new UsersModel();
        $this->usaha = new ProfilModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Profil Usaha',
            'user' => $this->users->first(),
            'konten' => 'company/index',
            'usaha' => $this->usaha->where('id_pemilik', $this->id)->first()
        ];
        return view('layout/app', $data);
    }

    public function datagrid()
    {
        $id_pemilik = session('LT@id');
        $data = [
            'usaha' => $this->usaha->where('id_pemilik',$id_pemilik)->orderBy('nama_usaha','ASC')->findAll()
        ];
        
        $view = view('company/grid', $data);
        echo json_encode(['tabel' => $view]);
    }

    public function tambah(){
        return view('company/tambah');
    }

    public function edit($id)
    {
        $data['usaha'] = $this->usaha->where('id', $id)->first();
        $view = view('company/edit', $data);
        echo json_encode($view);
    }

    public function save($id = ""){
        $id_pemilik = session('LT@id');
        $validation =  \Config\Services::validation();
        $validation->setRules(['nama_usaha' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();
        if($isDataValid){
            
            if($id == ""){
                $this->usaha->insert([
                    "nama_usaha" => $this->request->getPost('nama_usaha'),
                    'id_pemilik' => $id_pemilik,
                    "alamat" => $this->request->getPost('alamat'),
                    "email" => $this->request->getPost('email'),
                    "telepon" => $this->request->getPost('telepon'),
                    "npwp" => $this->request->getPost('npwp'),
                    "no_sk" => $this->request->getPost('no_sk'),
                    "keterangan" => $this->request->getPost('keterangan')
                ]);
                $data = ['type' => 'success', 'msg' => 'Data berhasil disimpan'];
                echo json_encode($data);
            }else{
                $this->usaha->update($id, [
                    "nama_usaha" => $this->request->getPost('nama_usaha'),
                    'id_pemilik' => $id_pemilik,
                    "alamat" => $this->request->getPost('alamat'),
                    "email" => $this->request->getPost('email'),
                    "telepon" => $this->request->getPost('telepon'),
                    "npwp" => $this->request->getPost('npwp'),
                    "no_sk" => $this->request->getPost('no_sk'),
                    "keterangan" => $this->request->getPost('keterangan')
                ]);
                $data = ['type' => 'success', 'size' => 'mini', 'text' => 'Data berhasil diupdate'];
                echo json_encode($data);
            }
        }
    }

    function delete($id){
        $data = $this->usaha->delete($id);
        if($data){
            $data = ['type' => 'success', 'size' => 'mini', 'text' => 'Data berhasil di hapus'];
        echo json_encode($data);
        }
    }
}