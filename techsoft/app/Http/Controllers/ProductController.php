<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\File;
use File as Arquivo;

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
        $category = new Category();
        $categories = $category->get();
        return view('sistema.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $model = new Product();
        $product = $model->create($request->toArray());

        //info($request);
        //storage/logs/laravel.log
        $name = $_FILES['image']['name'];

        $this->save_file($_FILES, $request->toArray());

        $file = [
            'path' => '/site/uploads/products/' . $name,
            'fileable_id' => $product->id,
            'fileable_type' => 'products',
            'category' => 'image'
        ];

        $modelFile = new File();
        $modelFile->create($file);

        return response()->json([
            'error' => false,
            'product' => $product,
            'message' => 'Produto cadastrado com sucesso'
        ]);
    }

    public function save_file($file, $data)
    {
        $name = $file['image']['name'];
        $path = './site/uploads/products';

        if(!file_exists($path)) Arquivo::makeDirectory($path, 777, true);

        $output_file = $path . '/' . $name;
        $data['image']->move($path, $output_file);
    }

}
