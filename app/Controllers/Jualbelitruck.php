<?php

namespace App\Controllers;
use App\Models\SopirModel;
use App\Models\JualbelitruckModel;
use App\Models\UsersModel;
use CodeIgniter\Controller;
use CodeIgniter\Exceptions\PageNotFoundException;

class Jualbelitruck extends BaseController
{
    function __construct()
    {
        $this->maintenance = new JualbelitruckModel();
        $this->users = new UsersModel();
    }
    
    public function index()
    {
        $data = [
            'title' => 'Maintenance Truck',
            'konten' => 'jualbelitruck/index',
            'user' => $this->users->first()
        ];
        return view('layout/app', $data);
    }

    public function datagrid()
    {
        $id_pemilik = session('LT@id');
        $data = [
            'jualbeli' => $this->maintenance->orderBy('id','DESC')->findAll()
        ];

        $view = view('jualbelitruck/grid', $data);
        echo json_encode(['tabel' => $view]);
    }

    public function tambah(){
        return view('jualbelitruck/tambah');
    }

    public function edit($id)
    {
        $data = [
            'edit' => $this->maintenance->where('id', $id)->first()
        ];
        
        $view = view('jualbelitruck/edit', $data);
        echo json_encode($view);
    }

    public function save($id = ""){
        $id_pemilik = session('LT@id');
        $validation =  \Config\Services::validation();
        $validation->setRules(['tgl_transaksi' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();
        if($isDataValid){
            
            if($id == ""){
                $this->maintenance->insert([
                    "file_invoice" => 'no-image.png',
                    "id_pemilik" => $id_pemilik,
                    "no_kendaraan" => $this->request->getPost('no_kendaraan'),
                    "tgl_transaksi" => $this->request->getPost('tgl_transaksi'),
                    "keterangan" => $this->request->getPost('keterangan')
                ]);
                $data = ['type' => 'success', 'msg' => 'Data berhasil disimpan'];
                echo json_encode($data);
            }else{
                $this->maintenance->update($id, [
                    "file_invoice" => 'no-image.png',
                    "id_pemilik" => $id_pemilik,
                    "no_kendaraan" => $this->request->getPost('no_kendaraan'),
                    "tgl_transaksi" => $this->request->getPost('tgl_transaksi'),
                    "keterangan" => $this->request->getPost('keterangan')
                ]);
                $data = ['type' => 'success', 'size' => 'mini', 'text' => 'Data berhasil diupdate'];
                echo json_encode($data);
            }
        }
    }

    function delete($id){
        $data = $this->maintenance->delete($id);
        if($data){
            $data = ['type' => 'success', 'size' => 'mini', 'text' => 'Data berhasil di hapus'];
        echo json_encode($data);
        }
    }
}