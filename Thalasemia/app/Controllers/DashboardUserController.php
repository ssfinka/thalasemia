<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\LaporanModel;

class DashboardUserController extends BaseController
{
    public function index()
    {
        $laporanModel = new LaporanModel();
        $totalLaporan = $laporanModel->countAllResults(); // Menghitung total laporan menggunakan method dari model
        
        return view('/pagesUser/dashboardUser', ['totalLaporan' => $totalLaporan]);
    }
}