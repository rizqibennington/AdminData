<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return redirect()->to('http://localhost:8080/login');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
}
