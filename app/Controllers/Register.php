<?php

namespace App\Controllers;
use App\Models\UsersModel;

class Register extends BaseController
{
    public function index()
    {
        return view('auth/register');
    }

	function auth(){
		if (!$this->validate([
            'username' => [
                'rules' => 'required|min_length[12]|max_length[100]|is_unique[users.username]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 12 Karakter',
                    'max_length' => '{field} Maksimal 100 Karakter',
                    'is_unique' => 'Username sudah digunakan sebelumnya'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[8]|max_length[20]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 8 Karakter',
                    'max_length' => '{field} Maksimal 20 Karakter',
                ]
            ],
            'confirm' => [
                'rules' => 'matches[password]',
                'errors' => [
                    'matches' => 'Konfirmasi password tidak sesuai dengan password',
                ]
            ],
            'name' => [
                'rules' => 'required|min_length[4]|max_length[100]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 100 Karakter',
                ]
            ],
            'agree' => [
                'rules' => 'matches[agree]',
                'errors' => [
                    'matches' => 'Anda belum menyetujui Terms of Use & Privacy Policy.',
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->to('/register')->withInput();
        }
        $users = new UsersModel();
        $users->insert([
            'username' => $this->request->getVar('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            'name' => $this->request->getVar('name')
        ]);
        return redirect()->to('/login');
    }
}
