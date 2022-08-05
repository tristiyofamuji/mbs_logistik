<?php

namespace App\Controllers;
use App\Models\SopirModel;
use App\Models\MaintenancetruckModel;
use App\Models\UsersModel;
use CodeIgniter\Controller;
use CodeIgniter\Exceptions\PageNotFoundException;

class Maintenancetruck extends BaseController
{
    function __construct()
    {
        $this->maintenance = new MaintenancetruckModel();
        $this->users = new UsersModel();
        $this->sopir = new SopirModel();
    }
    
    public function index()
    {
        $data = [
            'title' => 'Maintenance Truck',
            'konten' => 'maintenancetruck/index',
            'user' => $this->users->first()
        ];
        return view('layout/app', $data);
    }

    public function datagrid()
    {
        $id_pemilik = session('LT@id');
        $data = [
            'sopir' => $this->sopir->where('id_pemilik',$id_pemilik)->orderBy('nama','ASC')->findAll(),
            'pajak' => $this->maintenance->getData()
        ];

        $view = view('maintenancetruck/grid', $data);
        echo json_encode(['tabel' => $view]);
    }

    public function tambah(){
        $id_pemilik = session('LT@id');
        $data = [
            'sopir' => $this->sopir->where('id_pemilik',$id_pemilik)->orderBy('nama','ASC')->findAll()
        ];
        return view('maintenancetruck/tambah',$data);
    }

    public function edit($id)
    {
        $id_pemilik = session('LT@id');
        $data = [
            'sopir' => $this->sopir->where('id_pemilik',$id_pemilik)->orderBy('nama','ASC')->findAll(),
            'edit' => $this->maintenance->where('id', $id)->first()
        ];
        
        $view = view('maintenancetruck/edit', $data);
        echo json_encode($view);
    }

    public function save($id = ""){
        $id_pemilik = session('LT@id');
        $validation =  \Config\Services::validation();
        $validation->setRules(['id_sopir' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();
        // var_dump($this->request->getPost('wilayah'));die;
        if($isDataValid){
            
            if($id == ""){
                $this->maintenance->insert([
                    "id_sopir" => $this->request->getPost('id_sopir'),
                    "tgl_transaksi" => $this->request->getPost('tgl_transaksi'),
                    "no_kendaraan" => $this->request->getPost('no_kendaraan'),
                    "total_biaya" => $this->request->getPost('total_biaya'),
                    "keterangan" => $this->request->getPost('keterangan')
                ]);
                $data = ['type' => 'success', 'msg' => 'Data berhasil disimpan'];
                echo json_encode($data);
            }else{
                $this->maintenance->update($id, [
                    "id_sopir" => $this->request->getPost('id_sopir'),
                    "tgl_transaksi" => $this->request->getPost('tgl_transaksi'),
                    "no_kendaraan" => $this->request->getPost('no_kendaraan'),
                    "total_biaya" => $this->request->getPost('total_biaya'),
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