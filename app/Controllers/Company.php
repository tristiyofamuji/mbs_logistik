<?php

namespace App\Controllers;
use App\Models\UsersModel;
use App\Models\ProfilModel;

class Company extends BaseController
{
    public function index()
    {
        $id = session('LT@id');
        $users =  new UsersModel();
        $this->usaha = new ProfilModel();
        if($this->usaha->where('id_pemilik', $id)->get()->getNumRows() == 0){
            /* $usahabaru = [
                'id_pemilik' => $id
            ];
            
            $usaha->insertBatch($usahabaru); */
            $this->usaha->insert([
                'id_pemilik' => $id
            ]);
            session()->setFlashdata('message', 'Tambah Data Pegawai Berhasil');
        }
        $data = [
            'title' => 'Profil Usaha',
            'user' => $users->first(),
            'usaha' => $usaha->where('id_pemilik', $id)->first()
        ];
        // echo $usaha->where('id_pemilik', $id)->get()->getNumRows();
        // print_r($usaha->where('id_pemilik', $id)->first());
        return view('layout/header', $data)
              . view('layout/menu', $data)
              . view('setting/index', $data)
              . view('layout/footer');
    }

    public function editData()
    {
        if(empty($this->request->getVar('password'))) {
            $data = [
                'username' => $this->request->getVar('username'),
                'name'    => $this->request->getVar('name')
            ];
        }else{
            $data = [
                'username' => $this->request->getVar('username'),
                'name' => $this->request->getVar('name'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT)
            ];
        }

        $usaha = new ProfilModel();
        $id_user = session('LT@id');
        $id = $this->request->getVar('id');
        $usaha->update($id, $data);
        
        session()->setFlashdata('success', 'Data berhasil disimpan.');
        return redirect()->to('/profile');
    }
}