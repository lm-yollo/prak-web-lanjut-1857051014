<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KelasModel;
use App\Models\UsersModel;

class UserController extends BaseController
{
    public $userModel;
    public $kelasModel;
    public function __construct()
    {
        $this->userModel = new UsersModel();
        $this->kelasModel = new KelasModel();
    }
    public function index()
    {

        $users = $this->userModel->getUser();
        $data = [
            'title' => "Daftar User",
            'users' => $users,
        ];
        return view('index', $data);
    }
    public function detail($npm)
    {
        $user = $this->userModel->getUsersWithKelasByNpm($npm);
        $title = "Detail User";

        if ($user) {
            // Data ditemukan, tampilkan tampilan profil pengguna
            $data = [
                'user' => $user,
                'title' => $title
            ];
            return view('profile', $data);
        } else {
            // Data tidak ditemukan, tampilkan pesan error atau tampilan lain
            // return view('user_not_found');
            return 'User Tidak Ada'; // Menggunakan return daripada echo
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
        $kelas = $this->kelasModel->getKelas();
        $data = [
            'title' => "Tambah User",
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
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!');
        return redirect()->to('/user');
    }
}
