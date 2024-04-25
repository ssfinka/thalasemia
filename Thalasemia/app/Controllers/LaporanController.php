<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\LaporanModel;

class LaporanController extends BaseController
{

    protected $LaporanModel;

    public function __construct()
    {
        $this->LaporanModel = new LaporanModel();
        $db = \Config\Database::connect();
    }

    public function index()
    {
        $query = $this->LaporanModel->findAll();
        $data = [
            'result' => $query,
            // 'pager' => $this->LaporanModel->pager
        ];
        return view('pages/laporan_kerja', $data);
    }

    public function dashboard()
    {
        $query = $this->LaporanModel->findAll();
        $data = [
            'result' => $query,
            // 'pager' => $this->UserModel->pager
        ];
        return view('pages/dashboard_admin', $data);
    }

    public function hapus($id = null)
    {
        $hapus = $this->LaporanModel->where(array('id' => $id))->delete(); // jika type data idnya string, maka harus gunakan where()

        if ($hapus) : // jika kondisi true
            return redirect()->to('/laporan'); // kembalikan ke routes /barang
        else :
            
        endif;
    }

    public function edit($id)
    {
        $result = $this->LaporanModel->find($id);

        $data = [
            'result' => $result
        ];
        return view('pages/edit_laporan', $data);
    }

    public function detail($id)
    {
        $result = $this->LaporanModel->find($id);

        $data = [
            'result' => $result
        ];
        return view('pages/detail_laporan', $data);
    }

    public function save()
    {
        // $gambar = $this->request->getFile('gambar'); // ambil inputan gambar
        // if ($gambar->getError() == 4) : // jika terdapat error di gambar
        //     $namabaru = $this->request->getVar('gambarlama'); // gunakan gambar lama
        // else : // jika benar
        //     $namabaru = $gambar->getRandomName(); // dapatkan nama random dari gambar
        //     $gambar->move('img', $namabaru); // lalu pindahkan gambar ke folder img dengan nama gambar baru yang ada di 
        //     unlink('img/' . $this->request->getVar('gambarlama'));
        // endif;

        $data = [
            'id' => $this->request->getVar('id'),
            'nama' => $this->request->getVar('nama'),
            'image' => $this->request->getVar('image'),
            'tanggal' => $this->request->getVar('tanggal'),
            'nama_tugas' => $this->request->getVar('nama_tugas'),
            'deskripsi' => $this->request->getVar('deskripsi'),
        ];

        $this->LaporanModel->save($data); // update data

        return redirect()->to('/laporan');
    }
}
