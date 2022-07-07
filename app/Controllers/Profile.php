<?php

namespace App\Controllers;
use App\Models\UsersModel;

class Profile extends BaseController
{
    public function index()
    {
        $users =  new UsersModel();
        $data = [
            'title' => 'Profile',
            'user' => $users->first()
        ];

        return view('layout/header', $data)
              . view('layout/menu', $data)
              . view('profile/index', $data)
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

        $users =  new UsersModel();
        $id = session('LT@id');
        $users->update($id, $data);
        
        session()->setFlashdata('success', 'Data berhasil disimpan.');
        return redirect()->to('/profile');
    }
}
