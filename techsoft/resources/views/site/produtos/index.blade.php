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
                        <li>
                            <input type="checkbox" name="category" value="acessorio" id="acessorio" />
                            <label for="acessorio">Acessório</label>
                        </li>
                        <li>
                            <input type="checkbox" name="category" value="celular" id="celular" />
                            <label for="celular">Celular</label>
                        </li>

                        <li>
                            <input type="checkbox" name="category" value="console" id="console" />
                            <label for="console">Console</label>
                        </li>
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
                    <p>Listando 8 produtos</p>
                </div>
                <div class="col-produto mb-4 col-lg-4 col-sm-6 col-12">
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
                            <p class="preco-produto">R$590,00</p>
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                </div>

                <div class="col-produto mb-4 col-lg-4 col-sm-6 col-12">
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

                <div class="col-produto mb-4 col-lg-4 col-sm-6 col-12">
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

                <div class="col-produto mb-4 col-lg-4 col-sm-6 col-12">
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

                <div class="col-produto mb-4 col-lg-4 col-sm-6 col-12">
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
                            <p class="preco-produto">R$4300,00</p>
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                </div>

                <div class="col-produto mb-4 col-lg-4 col-sm-6 col-12">
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

                <div class="col-produto mb-4 col-lg-4 col-sm-6 col-12">
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

                <div class="col-produto mb-4 col-lg-4 col-sm-6 col-12">
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
