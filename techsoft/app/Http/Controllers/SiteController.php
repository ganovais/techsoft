<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class SiteController extends Controller
{

    public function index()
    {
        return view('site.home.index');
    }

    public function carrinho()
    {
        return view('site.carrinho.index');
    }

    public function produtos(Request $request)
    {
        $products = new Product();
        $categories = new Category();

        $products = $products->with('category', 'image');
        if(isset($request->search)) {
            $products = $products->where('title', 'LIKE', '%' . $request->search . '%');
        }

        if(isset($request->category)) {
            $products = $products->where('category_id', $request->category);
        }

        $categories = $categories->get();
        $products = $products->get();
        return view('site.produtos.index', compact('products', 'categories'));
    }

    public function contato()
    {
        return view('site.contato.index');
    }


    public function produtoDetalhe($slug)
    {
        $model = new Product();
        $product = $model->where('slug', $slug)->first();
        return view('site.produto-detalhe.index', compact('product'));
    }


}
