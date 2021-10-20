@extends('layouts.site')


@section('content')

@include('site.home.banner')

<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <h3>Produtos</h3>
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

        <div class="col-produto mb-4 col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="produto">
                <div class="img-produto">
                    <a href="{{ url('/produto/nome-produto') }}">
                        <img src="{{ asset('site/assets/images/iphone11.png') }}" class="img-fluid" />
                    </a>
                </div>

                <div class="detalhe-produto mb-3">
                    <a href="{{ url('/produto/nome-produto') }}">
                        <p class="mb-0">Iphone 11</p>
                    </a>
                    <small class="orange-o">Celulares</small>
                </div>

                <div class="add-cart-produto pb-1">
                    <p class="preco-produto">R$ 4300,00</p>
                    <i class="fas fa-plus"></i>
                </div>
            </div>
        </div>

        <div class="col-produto mb-4 col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="produto">
                <div class="img-produto">
                    <a href="{{ url('/produto/nome-produto') }}">
                        <img class="img-fluid wd-70" src="{{ asset('site/assets/images/airpods-pro.png') }}" alt="" />
                    </a>
                </div>
                <div class="detalhe-produto mb-3">
                    <a href="{{ url('/produto/nome-produto') }}">
                        <p class="mb-0">AirPods Pro</p>
                    </a>
                    <small class="orange-o">Acessórios</small>
                </div>
                <div class="add-cart-produto pb-1">
                    <p class="preco-produto">R$ 1790,00</p>
                    <i class="fas fa-plus"></i>
                </div>
            </div>
        </div>

        <div class="col-produto mb-4 col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="produto">
                <div class="img-produto">
                    <a href="{{ url('/produto/nome-produto') }}">
                        <img class="img-fluid" src="{{ asset('site/assets/images/macbook-pro.png') }}" alt="" />
                    </a>
                </div>
                <div class="detalhe-produto mb-3">
                    <a href="{{ url('/produto/nome-produto') }}">
                        <p class="mb-0">Macbook Pro</p>
                    </a>
                    <small class="orange-o">Notebooks</small>
                </div>
                <div class="add-cart-produto pb-1">
                    <p class="preco-produto">R$ 23000,00</p>
                    <i class="fas fa-plus"></i>
                </div>
            </div>
        </div>

        <div class="col-produto mb-4 col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="produto">
                <div class="img-produto">
                    <a href="{{ url('/produto/nome-produto') }}">
                        <img class="img-fluid" src="{{ asset('site/assets/images/tv1.png') }}" alt="" />
                    </a>
                </div>
                <div class="detalhe-produto mb-3">
                    <a href="{{ url('/produto/nome-produto') }}">
                        <p class="mb-0">Smart TV 42 - Samsung</p>
                    </a>
                    <small class="orange-o">TVs</small>
                </div>
                <div class="add-cart-produto pb-1">
                    <p class="preco-produto">R$ 2390,00</p>
                    <i class="fas fa-plus"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5 mb-5">
        <div class="col-12 center-button">
            <button class="btn btn-theme btn-orange">Ver mais produtos</button>
        </div>
    </div>
</div>
@endsection
