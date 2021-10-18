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

        return response()->json([
            'error' => false,
            'category' => $categoryModel,
            'message' => 'Categoria cadastrada com sucesso.'
        ]);
    }

    public function show($id)
    {
        $categoryModel = new Category();

        return response()->json([
            'error' => false,
            'category' => $categoryModel->findOrFail($id),
        ]);
    }

    public function update(Request $request, $id)
    {
        $categoryModel = new Category();
        $category = $categoryModel->findOrFail($id);
        $category->update(['title' => $request['title']]);

        return response()->json([
            'error' => false,
            'category' => $categoryModel,
            'message' => 'Categoria alterada com sucesso.'
        ]);
    }

    public function destroy($id)
    {
        $categoryModel = new Category();
        $category = $categoryModel->findOrFail($id);
        $category->delete();

        return response()->json([
            'error' => false,
            'message' => 'Categoria deletada com sucesso.'
        ]);
    }

}
