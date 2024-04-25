<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\DashboardModel;

class DashboardController extends BaseController
{
    protected $DashboardModel;

    public function __construct()
    {
        $this->DashboardModel = new DashboardModel();
        $db = \Config\Database::connect();
    }

    public function index()
    {
        $query = $this->DashboardModel->findAll();
        $data = [
            'result' => $query
        ];
        return view('pages/dashboard_admin', $data);
    }
}
