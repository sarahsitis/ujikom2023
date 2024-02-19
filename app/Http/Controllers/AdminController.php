<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index() 
    {
        $data['title'] = 'Admin Dashboard';
        return view('admin.index')->with($data);
    }

    public function dashboard() 
    {
        $data['title'] = 'Dashboard';
        return view('admin.dashboard')->with($data);
    }

    public function home()
    {
        return view('admin.home');
    }

    public function auth()
    {
        return view('admin.auth');
    }
}
