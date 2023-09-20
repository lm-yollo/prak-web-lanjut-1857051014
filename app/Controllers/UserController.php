<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class UserController extends BaseController
{
    public function index()
    {
        //
    }

    public function profile($nama = "",$kelas ="", $npm = "")
    {
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm
        ];

        return view('profile', $data);
    }

    public function create()
    {
        $kelas = [
            [
                'id' => 1,
                'nama_kelas' => 'AB'
            ],
            [
                'id' => 2,
                'nama_kelas' => 'BC'
            ],
            [
                'id' => 3,
                'nama_kelas' => 'CD'
            ],
            [
                'id' => 4,
                'nama_kelas' => 'DA'
            ],
            
        ];
        $data = [
            'kelas' => $kelas,
        ];
        return view('create_user', $data);
    }
    public function store()
    {
        // dd($this->request->getVar());

        $userModel = new UsersModel;

        $userModel->save([
            'nama' => $this->request->getVar('nama'),
            'npm' => $this->request->getVar('npm'),
            'id_kelas' => $this->request->getVar('kelas'),
            
        ]);
        $data = [
            'nama' => $this->request->getVar('nama'),
            'kelas' => $this->request->getVar('kelas'),
            'npm' => $this->request->getVar('npm')
        ];
        return view('profile', $data);
    }
}
