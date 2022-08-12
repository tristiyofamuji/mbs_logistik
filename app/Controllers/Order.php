<?php

namespace App\Controllers;
use App\Models\UsersModel;

class Order extends BaseController
{
    function __construct()
    {
        $this->order = new OrderModel();
        $this->users = new UsersModel();
    }

    public function index(){
        $data = [
            'title' => 'Data Order',
            'konten' => 'order/index',
            'user' => $this->users->first()
        ];
        return view('layout/app', $data);
    }

    public function datagrid()
    {
        $id_pemilik = session('LT@id');
        $data = [
            'order' => $this->order->where('id_pemilik',$id_pemilik)->orderBy('nama','ASC')->findAll()
        ];
        
        $view = view('order/grid', $data);
        echo json_encode(['tabel' => $view]);
    }

    public function tambah(){
        return view('order/tambah');
    }

    public function edit($id)
    {
        $data['order'] = $this->order->where('id', $id)->first();
        $view = view('order/edit', $data);
        echo json_encode($view);
    }

    public function save($id = ""){
        $id_pemilik = session('LT@id');
        $validation =  \Config\Services::validation();
        $validation->setRules(['nama' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();
        $whatsapp = $this->request->getPost('no_whatsapp');

        if($isDataValid){
            
            if($id == ""){
                $this->order->insert([
                    "nama" => $this->request->getPost('nama'),
                    'id_pemilik' => $id_pemilik,
                    "telepon" => $this->request->getPost('telepon'),
                    "no_whatsapp" => $this->request->getPost('no_whatsapp'),
                    "no_kendaraan" => $this->request->getPost('no_kendaraan'),
                    "alamat" => $this->request->getPost('alamat')
                ]);
                $data = ['type' => 'success', 'msg' => 'Data berhasil disimpan'];
                echo json_encode($data);
            }else{
                $this->order->update($id, [
                    "nama" => $this->request->getPost('nama'),
                    'id_pemilik' => $id_pemilik,
                    "telepon" => $this->request->getPost('telepon'),
                    "no_whatsapp" => $this->request->getPost('no_whatsapp'),
                    "no_kendaraan" => $this->request->getPost('no_kendaraan'),
                    "alamat" => $this->request->getPost('alamat')
                ]);
                $data = ['type' => 'success', 'size' => 'mini', 'text' => 'Data berhasil diupdate'];
                echo json_encode($data);
            }
        }
    }

    function delete($id){
        $data = $this->order->delete($id);
        if($data){
            $data = ['type' => 'success', 'size' => 'mini', 'text' => 'Data berhasil di hapus'];
        echo json_encode($data);
        }
    }
}