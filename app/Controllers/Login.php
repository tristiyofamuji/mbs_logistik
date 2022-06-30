<?php

namespace App\Controllers;
 
use App\Models\UsersModel;

class Login extends BaseController
{
    public function index()
    {
        return view('auth/login');
    }

	function auth(){
        $users          = new UsersModel();
		$username       = $this->request->getVar('username');
        $password       = $this->request->getVar('password');

        $dataUser       = $users->where([
            'username' => $username,
        ])->first();
        if ($dataUser) {
            if (password_verify($password, $dataUser->password)) {
                session()->set([
                    'username' => $dataUser->username,
                    'name' => $dataUser->name,
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url('home'));
            } else {
                session()->setFlashdata('error', 'Password salah, silahkan login ulang.');
                return redirect()->to('/login');
            }
        } else {
            session()->setFlashdata('error', 'Username Salah, silahkan login ulang.');
            return redirect()->to('/login');
        }
    }

    function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
