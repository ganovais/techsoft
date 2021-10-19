<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $product = new Product();
        $products = $product->get();
        return view('sistema.products.index', compact('products'));
    }

    public function create()
    {
        return view('sistema.products.create');
    }


}
