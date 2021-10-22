<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\File;
use File as Arquivo;
use Illuminate\Support\Str;

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

    public function edit($id)
    {
        $model = new Product();
        $product = $model->with('category', 'image')->findOrFail($id);

        $category = new Category();
        $categories = $category->get();
        return view('sistema.products.create', compact('product', 'categories'));
    }

    public function store(Request $request)
    {
        $model = new Product();
        $request['slug'] = Str::slug($request['title'], '-');
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

    public function update(Request $request, $id)
    {
        $model = new Product();
        $modelFile = new File();
        $model = $model->findOrFail($id);

        $request['slug'] = Str::slug($request['title'], '-');

        if(!empty($_FILES['image']['name'])) {
            $image = $model->image;

            if(isset($image)) {
                $path = './site/uploads/products/';
                $name_arr = explode('/', $image->path);

                if(file_exists($path . $name_arr[4]) && $name_arr[4] != '') {
                    unlink($path . $name_arr[4]);
                }
                $image->delete();
            }
            $this->save_file($_FILES, $request->toArray());

            $file = [
                'path' => '/site/uploads/products' . '/' . $_FILES['image']['name'],
                'fileable_id' => $model->id,
                'fileable_type' => 'products',
                'category' => 'image'
            ];

            $modelFile->create($file);
        }

        $model->update($request->toArray());

        return response()->json([
            'error' => false,
            'product' => $model,
            'message' => 'Produto alterado com sucesso.'
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

    public function destroy($id)
    {
        $model = new Product();
        $product = $model->findOrFail($id);
        $product->delete();

        return response()->json([
            'error' => false,
            'message' => 'Produto deletado com sucesso.'
        ]);
    }

}
