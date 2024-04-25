<?php

namespace App\Controllers;

class ProfileUserController extends BaseController
{
    public function index()
    {
        return view('pages/profile_admin');
    } 
}