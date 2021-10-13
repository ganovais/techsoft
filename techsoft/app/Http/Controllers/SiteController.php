<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function contato()
    {
        return view('site.contato.index');
    }


    public function produtoDetalhe($slug)
    {
        return view('site.produto-detalhe.index');
    }


}
