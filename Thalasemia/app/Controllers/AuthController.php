<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\AkunModel;

class AuthController extends BaseController
{
    protected $AkunModel;

    public function index()
    {
        return view('auth/login');
    }
    public function __construct()
    {
        $this->AkunModel = new AkunModel();
        $db = \Config\Database::connect();
    }

    public function setting()
    {
        $query = $this->AkunModel->findAll();
        $data = [
            'result' => $query
        ];
        // dd($data['result']);
        return view('pages/profile_admin', $data);
    }

    public function postlogin()
    {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');


        $log = $this->AkunModel->getData($email);
        if ($log == null) {
            return redirect()->to('/');
        } else {
            if ($password == $log->password) {
                return redirect()->to('/dashboard');
            } else {
                return redirect()->to('/');
            }
        }

        // if (password_verify($password, $log->password)) {
        //     $data = [
        //         'login' => true,
        //         'email' => $log->email,
        //     ];
        //     session()->set($data);

        //     return redirect()->to('/')->with('msg', 'Berhasil Login');
        // }
    }

    public function register()
    {
        $data = [
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
        ];
        $this->AkunModel->insert($data); // Insert data dari $data ke database

        return redirect()->to('/'); // kembalikan ke routes '/'
    }
    
    public function edit()
    {
        $data = [
            'id' => 1,
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'password' => $this->request->getVar('password'),
            'no_telp' => $this->request->getVar('no_telp'),
            'username' => $this->request->getVar('username'),
        ];

        dd($data);

        $this->AkunModel->save($data); // update data

        return redirect()->to('/laporan');
    }

    public function logout()
    {  
        return redirect()->to('/');
    }
}
