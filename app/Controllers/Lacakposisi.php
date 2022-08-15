<?php

namespace App\Controllers;
use App\Models\LacakposisiModel;
use CodeIgniter\Controller;
use App\Models\UsersModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Lacakposisi extends BaseController
{
    function __construct()
    {
        $this->posisi = new LacakposisiModel();
        $this->users = new UsersModel();
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
}
