<?php

namespace App\Controllers;
use App\Models\SopirModel;
use App\Models\PajakdansimModel;
use App\Models\UsersModel;
use CodeIgniter\Controller;
use CodeIgniter\Exceptions\PageNotFoundException;

class Pajakdansim extends BaseController
{
    function __construct()
    {
        $this->pajak = new PajakdansimModel();
        $this->users = new UsersModel();
        $this->sopir = new SopirModel();
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
            'user' => $this->users->first(),
            'pajak' => $this->pajak->getData()
        ];

        $view = view('pajakdansim/grid', $data);
        echo json_encode(['tabel' => $view]);
    }

    public function tambah(){
        $id_pemilik = session('LT@id');
        $data = [
            'sopir' => $this->sopir->where('id_pemilik',$id_pemilik)->orderBy('nama','ASC')->findAll()
        ];
        return view('pajakdansim/tambah',$data);
    }

    public function edit($id)
    {
        $id_pemilik = session('LT@id');
        $data = [
            'sopir' => $this->sopir->where('id_pemilik',$id_pemilik)->orderBy('nama','ASC')->findAll(),
            'edit' => $this->pajak->where('id', $id)->first()
        ];
        
        $view = view('pajakdansim/edit', $data);
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
                $this->pajak->insert([
                    "id_sopir" => $this->request->getPost('id_sopir'),
                    "jenis_kendaraan" => $this->request->getPost('jenis_kendaraan'),
                    "jenis_surat" => $this->request->getPost('jenis_surat'),
                    "masa_berlaku" => $this->request->getPost('masa_berlaku'),
                    "wilayah" => $this->request->getPost('wilayah'),
                    "keterangan" => $this->request->getPost('keterangan')
                ]);
                $data = ['type' => 'success', 'msg' => 'Data berhasil disimpan'];
                echo json_encode($data);
            }else{
                $this->pajak->update($id, [
                    "id_sopir" => $this->request->getPost('id_sopir'),
                    "jenis_kendaraan" => $this->request->getPost('jenis_kendaraan'),
                    "jenis_surat" => $this->request->getPost('jenis_surat'),
                    "masa_berlaku" => $this->request->getPost('masa_berlaku'),
                    "wilayah" => $this->request->getPost('wilayah'),
                    "keterangan" => $this->request->getPost('keterangan')
                ]);
                $data = ['type' => 'success', 'size' => 'mini', 'text' => 'Data berhasil diupdate'];
                echo json_encode($data);
            }
        }
    }

    function delete($id){
        $data = $this->pajak->delete($id);
        if($data){
            $data = ['type' => 'success', 'size' => 'mini', 'text' => 'Data berhasil di hapus'];
        echo json_encode($data);
        }
    }
}