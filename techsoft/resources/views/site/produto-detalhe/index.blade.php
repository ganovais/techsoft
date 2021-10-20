@extends('layouts.site')

@section('content')

<div class="banner-top">
    <div class="banner-top-blur"></div>
    <h1 class="title-blur">{{ $product->title }}</h1>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="order-2 order-md-1 col-12 col-lg-8">
            <div class="card-info">
                <div class="card-info-header">
                    <h4 class="mb-0">{{ $product->title }}</h4>
                    <p class="orange-o">{{ $product->category->title }}</p>
                </div>

                <div class="card-info-description">
                    <p>{{ $product->description }}</p>
                </div>

                <div class="card-info-price mt-5">
                    <h2 class="orange">R$ {{ $product->price }}</h2>
                    <button class="btn btn-orange btn-theme">
                        <p class="mb-0">Comprar</p>
                        <i class="fas fa-shopping-cart"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="order-1 order-md-2 col-12 col-lg-4">
            <div class="card-img">
                <img src="{{ asset($product->image->path) }}" alt="{{$product->title}}"
                    title="{{$product->title}}" class="img-fluid" />
            </div>
        </div>
    </div>

    <div class="row mt-5 mb-5">
        <div class="col-12 d-flex justify-content-center">
            <p class="hr"></p>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <h3>Produtos Relacionados</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-produto mb-4 col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="produto">
                <div class="img-produto">
                    <a href="{{ url('/produto/nome-produto') }}">
                        <img src="{{ asset('site/assets/images/mouse-razer-basilisk.png') }}" class="img-fluid wd-70" />
                    </a>
                </div>

                <div class="detalhe-produto mb-3">
                    <a href="{{ url('/produto/nome-produto') }}">
                        <p class="mb-0">Mouse Razer Basilisk</p>
                    </a>
                    <small class="orange-o">Acessórios</small>
                </div>

                <div class="add-cart-produto pb-1">
                    <p class="preco-produto">R$ 590,00</p>
                    <i class="fas fa-plus"></i>
                </div>
            </div>
        </div>

        <div class="col-produto mb-4 col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="produto">
                <div class="img-produto">
                    <a href="{{ url('/produto/nome-produto') }}">
                        <img class="img-fluid wd-70" src="{{ asset('site/assets/images/airpods-max.png') }}" alt="" />
                    </a>
                </div>
                <div class="detalhe-produto mb-3">
                    <a href="{{ url('/produto/nome-produto') }}">
                        <p class="mb-0">AirPods Max</p>
                    </a>
                    <small class="orange-o">Acessórios</small>
                </div>
                <div class="add-cart-produto pb-1">
                    <p class="preco-produto">R$ 5390,00</p>
                    <i class="fas fa-plus"></i>
                </div>
            </div>
        </div>

        <div class="col-produto mb-4 col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="produto">
                <div class="img-produto">
                    <a href="{{ url('/produto/nome-produto') }}">
                        <img class="img-fluid" src="{{ asset('site/assets/images/ps5.png') }}" alt="" />
                    </a>
                </div>
                <div class="detalhe-produto mb-3">
                    <a href="{{ url('/produto/nome-produto') }}">
                        <p class="mb-0">PlayStation 5</p>
                    </a>
                    <small class="orange-o">Console</small>
                </div>
                <div class="add-cart-produto pb-1">
                    <p class="preco-produto">R$ 4700,00</p>
                    <i class="fas fa-plus"></i>
                </div>
            </div>
        </div>

        <div class="col-produto mb-4 col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="produto">
                <div class="img-produto">
                    <a href="{{ url('/produto/nome-produto') }}">
                        <img class="img-fluid" src="{{ asset('site/assets/images/iphone-12-pro.png') }}" alt="" />
                    </a>
                </div>
                <div class="detalhe-produto mb-3">
                    <a href="{{ url('/produto/nome-produto') }}">
                        <p class="mb-0">Iphone 12 Pro Max</p>
                    </a>
                    <small class="orange-o">Celulares</small>
                </div>
                <div class="add-cart-produto pb-1">
                    <p class="preco-produto">R$ 8990,00</p>
                    <i class="fas fa-plus"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5 mb-5">
        <div class="col-12 center-button">
            <button class="btn btn-theme btn-orange">
                <p class="mb-0">Ver mais produtos</p>
            </button>
        </div>
    </div>
</div>
@endsection
