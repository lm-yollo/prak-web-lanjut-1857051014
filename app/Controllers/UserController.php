<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class UserController extends BaseController
{
    protected $userModel;
    public function __construct()
    {
        $this->userModel = new UsersModel();
    }
    public function index()
    {
        //

        $users = $this->userModel->getUsersWithKelas();
        $data = [
            'title' => "Daftar User",
            'users' => $users,
        ];
        return view('index', $data);
    }
    public function detail($npm)
    {
        $user = $this->userModel->getUsersWithKelasByNpm($npm);
        if ($user) {
            // Data ditemukan, tampilkan tampilan profil pengguna
            $data['user'] = $user;
            return view('profile', $data);
        } else {
            // Data tidak ditemukan, tampilkan pesan error atau tampilan lain
            // return view('user_not_found');
            echo 'User Tidak Ada';
        }
    }

    public function profile($nama = "", $kelas = "", $npm = "")
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
            'validation' => \Config\Services::validation()
        ];
        return view('create_user', $data);
    }
    public function store()
    {
        if (!$this->validate([
            'npm' => [
                'rules' => 'required|is_unique[user.npm]|min_length[10]',
                'errors' => [
                    'required' => '{field} tidak boleh kosong.',
                    'is_unique' => '{field} sudah terdaftar.',
                    'min_length' => '{field} minamal 10 karakter.',
                ]
            ],
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong.',
                ]
            ]
        ])) {
            $validationErrors = $this->validator->getErrors();

            // Simpan pesan kesalahan dalam flashdata berdasarkan nama bidang
            foreach ($validationErrors as $field => $error) {
                session()->setFlashdata('error_' . $field, $error);
            }
            return redirect()->to('/user/create')->withInput();
        }
        $userModel = new UsersModel;

        $userModel->saveUser([
            'nama' => $this->request->getVar('nama'),
            'npm' => $this->request->getVar('npm'),
            'id_kelas' => $this->request->getVar('kelas')
        ]);
        return redirect()->to('/user');
    }
}
