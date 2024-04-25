<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class UserController extends BaseController
{

    protected $UserModel;

    public function __construct()
    {
        $this->UserModel = new UserModel();
        $db = \Config\Database::connect();
    }

    public function index()
    {
        $query = $this->UserModel->findAll();
        $data = [
            'result' => $query,
            // 'pager' => $this->UserModel->pager
        ];
        
        return view('pages/users_admin', $data);
    }

    public function tambahusers()
    {

        // $gambar = $this->request->getFile('gambar'); // ambil inputan gambar
        // if ($gambar->getError() == 4) : // jika terdapat error di gambar
        //     $namabaru = 'default.jpg'; // gunakan gambar default.jpg
        // else : // jika benar
        //     $namabaru = $gambar->getRandomName(); // dapatkan nama random dari gambar
        //     $gambar->move('img', $namabaru); // lalu pindahkan gambar ke folder img dengan nama gambar baru yang ada di $namabaru
        // endif;

        // Tangkap semua data yang di input
        $data = [
            'nama' => $this->request->getVar('nama_karyawan'),
            'image' => 'avatar.png',
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'email' => $this->request->getVar('email'),
            'no_telp' => $this->request->getVar('no_telp'),
            'peran' => $this->request->getVar('peran'),
        ];
        $this->UserModel->insert($data); // Insert data dari $data ke database

        return redirect()->to('/users'); // kembalikan ke routes /users
    }

    public function hapus($id = null)
    {
        $hapus = $this->UserModel->where(array('id' => $id))->delete(); // jika type data idnya string, maka harus gunakan where()

        if ($hapus) : // jika kondisi true
            return redirect()->to('/users'); // kembalikan ke routes /users
        else :
            
        endif;
    }

    public function detail($id)
    {
        $result = $this->UserModel->find($id);

        $data = [
            'result' => $result
        ];
        return view('pages/detail_user', $data);
    }
}
