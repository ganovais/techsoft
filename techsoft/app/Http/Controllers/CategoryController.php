<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categoryModel = new Category();
        $categories = $categoryModel->get();
        return view('sistema.categories.index', compact('categories'));
    }

    public function store(Request $request)
    {
        $categoryModel = new Category();
        $categoryModel->fill($request->toArray());
        $categoryModel->save();
    }

}
