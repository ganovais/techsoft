@extends('layouts.site')

@section('content')
<div class="banner-top">
    <div class="banner-top-blur"></div>
    <h1 class="title-blur">PRODUTOS</h1>
</div>

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-12">
            <h3>Produtos</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-lg-3 col-md-4">
            <div class="filter">
                <form action="">
                    <div class="input-search">
                        <input type="text" name="search" placeholder="Pesquisar" />
                        <i class="fas fa-search"></i>
                    </div>

                    <h5 class="orange">Categorias</h5>
                    <ul>
                        @forelse($categories as $category)
                        <li>
                            <input type="checkbox" name="category" value="{{ $category->id }}" id="{{ $category->id }}" />
                            <label for="{{ $category->id }}">{{ $category->title }}</label>
                        </li>
                        @empty
                        <li>
                            Nenhuma categoria cadastrada no sistema
                        </li>
                        @endforelse
                    </ul>

                    <button type="submit" class="mt-4 btn btn-orange btn-block">
                        Pesquisar
                    </button>
                </form>
            </div>
        </div>

        <div class="col-12 col-lg-9 col-md-8">
            <div class="row">
                <div class="col-12">
                    <p>Listando {{ $products->count() }} produtos</p>
                </div>
                @forelse($products as $product)
                <div class="col-produto mb-4 col-lg-4 col-sm-6 col-12">
                    <div class="produto">
                        <div class="img-produto">
                            <a href="{{ url('/produto/' . $product->slug) }}">
                                <img src="{{ asset($product->image->path) }}" class="img-fluid wd-70" />
                            </a>
                        </div>

                        <div class="detalhe-produto mb-3">
                        <a href="{{ url('/produto/' . $product->slug) }}">
                                <p class="mb-0">{{ $product->title }}</p>
                            </a>
                            <small class="orange-o">{{ $product->category->title }}</small>
                        </div>

                        <div class="add-cart-produto pb-1">
                            <p class="preco-produto">R$ {{ $product->price }}</p>
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-produto mb-4 col-lg-4 col-sm-6 col-12">
                    Nenhum produto localizado
                </div>
                @endforelse

            </div>

            <div class="row mt-5 mb-5">
                <div class="col-12 d-flex justify-content-center">
                    <div class="pagination">
                        <div class="pagination-item">1</div>
                        <div class="pagination-item">2</div>
                        <div class="pagination-item">3</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
