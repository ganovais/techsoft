<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('sistema.dashboard.index');
    }

    public function categories()
    {
        return view('sistema.categories.index');
    }

}
