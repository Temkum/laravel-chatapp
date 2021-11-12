<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        # code...
        $this->middleware(['guest']);
    }

    public function index()
    {
        # code...
        return view('dashboard');
    }
}
