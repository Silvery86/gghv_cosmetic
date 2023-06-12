<?php

namespace App\Controllers;



use CodeIgniter\Exceptions\PageNotFoundException;
class User extends BaseController


{
    public function index()
    {
        return view('admin/login');
    }
    public function loginAccess()
    {

    }
}