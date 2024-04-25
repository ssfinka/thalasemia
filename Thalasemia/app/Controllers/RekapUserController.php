<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\LaporanModel;

class RekapUserController extends BaseController
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
            'result' => $query
        ];

        return view('pagesUser/rekap', $data);
    }

    public function detail($id)
    {
        $result = $this->LaporanModel->find($id);

        $data = [
            'result' => $result
        ];
        return view('pagesUser/detail', $data);
    }
    
    public function edit($id)
    {
        $result = $this->LaporanModel->find($id);

        $data = [
            'result' => $result
        ];
        return view('pagesUser/editrekap', $data);
    }

    public function hapus($id = null)
    {
        $hapus = $this->LaporanModel->where(array('id' => $id))->delete(); 

        if ($hapus) : 
            return redirect()->to('/rekap'); 
        else :
            
        endif;
    }

    public function save()
    {
        $data = [
            'id' => $this->request->getVar('id'),
            'nama' => $this->request->getVar('nama'),
            'nama_tugas' => $this->request->getVar('nama_tugas'),
            'tanggal' => $this->request->getVar('tanggal'),
            'deskripsi' => $this->request->getVar('deskripsi'),
        ];

        $this->LaporanModel->save($data);

        return redirect()->to('/rekap');
    }
}