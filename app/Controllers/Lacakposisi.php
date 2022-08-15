<?php

namespace App\Controllers;
use App\Models\LacakposisiModel;
use App\Models\SopirModel;
use CodeIgniter\Controller;
use App\Models\UsersModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Lacakposisi extends BaseController
{
    function __construct()
    {
        $this->posisi = new LacakposisiModel();
        $this->users = new UsersModel();
        $this->sopir = new SopirModel();
    }

    public function index(){
        $data = [
            'title' => 'Lacak Posisi Sopir',
            'konten' => 'lacakposisi/index',
            'user' => $this->users->first()
        ];
        return view('layout/app', $data);
    }

    public function datagrid()
    {
        $data = [
            'posisi' => $this->posisi->getData()
        ];
        
        $view = view('lacakposisi/grid', $data);
        echo json_encode(['tabel' => $view]);
    }

    public function tambah(){
        $id_pemilik = session('LT@id');
        $data = [
            'sopir' => $this->sopir->where('id_pemilik',$id_pemilik)->orderBy('nama','ASC')->findAll()
        ];
        return view('lacakposisi/tambah',$data);
    }

    public function edit($id)
    {
        $id_pemilik = session('LT@id');
        $data = [
            'sopir' => $this->sopir->where('id_pemilik',$id_pemilik)->orderBy('nama','ASC')->findAll(),
            'posisi' => $this->posisi->where('id', $id)->first()
        ];
        
        $view = view('lacakposisi/edit', $data);
        echo json_encode($view);
    }

    public function save($id = ""){
        $id_pemilik = session('LT@id');
        $validation =  \Config\Services::validation();
        $validation->setRules(['posisi_gps' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();
        // var_dump($this->request->getPost('periode'));die;
        if($isDataValid){
            
            if($id == ""){
                $this->posisi->insert([
                    "id_sopir" => $this->request->getPost('id_sopir'),
                    "posisi_gps" => $this->request->getPost('posisi_gps'),
                    "keterangan" => $this->request->getPost('keterangan')
                ]);
                $data = ['type' => 'success', 'msg' => 'Data berhasil disimpan'];
                echo json_encode($data);
                //var_dump($data);die;
            }else{
                $this->posisi->update($id, [
                    "id_sopir" => $this->request->getPost('id_sopir'),
                    "posisi_gps" => $this->request->getPost('posisi_gps'),
                    "keterangan" => $this->request->getPost('keterangan')
                ]);
                $data = ['type' => 'success', 'size' => 'mini', 'text' => 'Data berhasil diupdate'];
                echo json_encode($data);
            }
        }
    }

    function delete($id){
        $data = $this->sopir->delete($id);
        if($data){
            $data = ['type' => 'success', 'size' => 'mini', 'text' => 'Data berhasil di hapus'];
        echo json_encode($data);
        }
    }
}
