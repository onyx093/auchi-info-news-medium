<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminRouteController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function pages()
    {
        return view('admin.pages');
    }

    public function users()
    {
        return view('admin.users');
    }

    public function logout()
    {
        return true;
        //redirect('admin.login');
    }
    
}
