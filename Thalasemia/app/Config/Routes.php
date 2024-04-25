<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AuthController::index');
$routes->get('/dashboard', 'LaporanController::dashboard');
$routes->get('/profile', 'Home::profileAdmin');
$routes->get('/laporan', 'LaporanController::index');
$routes->get('/users', 'UserController::index');
$routes->get('/setting', 'AuthController::setting');
$routes->get('/hapus/(:any)', 'LaporanController::hapus/$1');
$routes->get('/hapususers/(:any)', 'UserController::hapus/$1');
$routes->get('/editlaporan/(:any)', 'LaporanController::edit/$1');
$routes->get('/detaillaporan/(:any)', 'LaporanController::detail/$1');
$routes->get('/detailuser/(:any)', 'UserController::detail/$1');
$routes->get('/editlaporan', 'LaporanController::edit');
$routes->post('/tambahusers', 'UserController::tambahusers');
$routes->post('/savelaporan', 'LaporanController::save');
$routes->post('/postlogin', 'AuthController::postlogin');
$routes->post('/register', 'AuthController::register');
$routes->post('/editprofil', 'AuthController::edit');

// user
$routes->get('/', 'AuthController::index');
$routes->get('/logout', 'AuthController::logout');
$routes->get('/dashboardUser', 'DashboardUserController::index');
$routes->get('/tugas', 'TugasController::index');
$routes->get('/rekap', 'RekapUserController::index');
$routes->post('/rekap', 'RekapUserController::index');
$routes->get('/profileUser', 'profileController::profileUser');
$routes->get('/hapuslaporan/(:any)', 'TugasController::hapus/$1');
$routes->get('/hapusrekap/(:any)', 'RekapUserController::hapus/$1');
$routes->get('/editUser/(:any)', 'TugasController::edit/$1');
$routes->get('/editrekap/(:any)', 'RekapUserController::edit/$1');
$routes->get('/detail/(:any)', 'TugasController::detail/$1');
$routes->post('/simpanlaporan', 'TugasController::save');
$routes->post('/simpanrekap', 'RekapUserController::save');
$routes->post('/tambahtugas', 'TugasController::tambahtugas');