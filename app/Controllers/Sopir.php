<?php

namespace App\Controllers;
use App\Models\SopirModel;
use CodeIgniter\Controller;
use App\Models\UsersModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Sopir extends BaseController
{
    protected $sopir;
 
    function __construct()
    {
        $this->sopir = new SopirModel();
        $this->users = new UsersModel();
    }

    public function index(){
        $data = [
            'title' => 'Data Sopir',
            'konten' => 'sopir/index',
            'user' => $this->users->first()
        ];
        return view('layout/app', $data);
    }

    public function datagrid()
    {
        $data = [
            'sopir' => $this->sopir->orderBy('nama','ASC')->findAll()
        ];
        
        $view = view('sopir/grid', $data);
        echo json_encode(['tabel' => $view]);
    }

    public function tambah(){
        return view('sopir/tambah');
    }

    public function edit($id)
    {
        $data['sopir'] = $this->sopir->where('id', $id)->first();
        $view = view('sopir/edit', $data);
        echo json_encode($view);
    }

    public function save($id = ""){
        $validation =  \Config\Services::validation();
        $validation->setRules(['pemasukan' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();
        if($isDataValid){
            
            if($id == ""){
                $this->sopir->insert([
                    "pemasukan" => $this->request->getPost('pemasukan'),
                    "pengeluaran" => $this->request->getPost('pengeluaran'),
                    "tgl_masuk" => $this->request->getPost('tgl_masuk').' '.date('H:i:s'),
                    "tgl_keluar" => $this->request->getPost('tgl_keluar').' '.date('H:i:s'),
                    "keterangan" => $this->request->getPost('keterangan')
                ]);
                $data = ['type' => 'success', 'msg' => 'Data berhasil disimpan'];
                echo json_encode($data);
            }else{
                $this->sopir->update($id, [
                    "pemasukan" => $this->request->getPost('pemasukan'),
                    "pengeluaran" => $this->request->getPost('pengeluaran'),
                    "tgl_masuk" => $this->request->getPost('tgl_masuk').' '.date('H:i:s'),
                    "tgl_keluar" => $this->request->getPost('tgl_keluar').' '.date('H:i:s'),
                    "keterangan" => $this->request->getPost('keterangan'),
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
