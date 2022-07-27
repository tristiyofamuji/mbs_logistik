<?php

namespace App\Controllers;
use App\Models\SopirModel;
use CodeIgniter\Controller;
use App\Models\UsersModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Gajisopir extends BaseController
{
    
    function __construct()
    {
        $this->sopir = new SopirModel();
        $this->users = new UsersModel();
    }

    public function index(){
        $data = [
            'title' => 'Data Gaji Sopir',
            'konten' => 'gajisopir/index',
            'user' => $this->users->first()
        ];
        return view('layout/app', $data);
    }

    public function datagrid()
    {
        $data = [
            'gaji' => $this->sopir->getGaji()
        ];
        
        $view = view('gajisopir/grid', $data);
        echo json_encode(['tabel' => $view]);
    }

    public function tambah(){
        $id_pemilik = session('LT@id');
        $data = [
            'sopir' => $this->sopir->where('id_pemilik',$id_pemilik)->orderBy('nama','ASC')->findAll()
        ];
        return view('gajisopir/tambah',$data);
    }
    
    public function tambah_slip($id){
        $data['gaji'] = $this->sopir->where('id', $id)->first();
        $view = view('gajisopir/tambah_slip', $data);
        echo json_encode($view);
    }
    
    public function detail_slip($id){
        $data['gaji'] = $this->sopir->where('id', $id)->first();
        $view = view('gajisopir/detail_slip', $data);
        echo json_encode($view);
    }

    public function edit($id)
    {
        $id_pemilik = session('LT@id');
        $gaji = $this->sopir->editGaji($id);
        $data = [
            'gaji' => $gaji,
            'sopir' => $this->sopir->where('id_pemilik',$id_pemilik)->orderBy('nama','ASC')->findAll()
        ];
        $view = view('gajisopir/edit', $data);
        echo json_encode($view);
    }

    public function save($id = ""){
        $id_pemilik = session('LT@id');
        $validation =  \Config\Services::validation();
        $validation->setRules(['periode' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();
        /* $whatever = $this->request->getVar();
        $result = $whatever['id_sopir']; */
        var_dump($this->request->getPost('id_sopir'));die;
        if($isDataValid){
            
            if($id == ""){
                $this->sopir->insert([
                    "id_sopir" => $this->request->getPost('id_sopir'),
                    "periode" => $this->request->getPost('periode'),
                    "keterangan" => $this->request->getPost('keterangan')
                ]);
                $data = ['type' => 'success', 'msg' => 'Data berhasil disimpan'];
                echo json_encode($data);
                //var_dump($data);die;
            }else{
                $this->sopir->update($id, [
                    "id_sopir" => $this->request->getPost('id_sopir'),
                    "periode" => $this->request->getPost('periode'),
                    "keterangan" => $this->request->getPost('keterangan')
                ]);
                $data = ['type' => 'success', 'size' => 'mini', 'text' => 'Data berhasil diupdate'];
                echo json_encode($data);
            }
        }
    }

    public function save_detail($id = ""){
        $id_pemilik = session('LT@id');
        $validation =  \Config\Services::validation();
        $validation->setRules(['nominal' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();
        
        if($isDataValid){
            
            $this->sopir->saveGaji([
                "kode" => $this->request->getPost('kode'),
                'id_gaji' => $id,
                "nominal" => $this->request->getPost('nominal'),
                "keterangan" => $this->request->getPost('keterangan')
            ]);

            
            $data = ['type' => 'success', 'msg' => 'Data berhasil disimpan'];
            echo json_encode($data);
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
