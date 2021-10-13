@extends('layouts.site')

@section('content')
<div class="banner-top">
    <div class="banner-top-blur"></div>
    <h1 class="title-blur">CARRINHO</h1>
</div>

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-12">
            <h3 class="orange">Carrinho</h3>
        </div>
        <div class="col-12 col-md-8">
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="carrinho-item">
                        <div class="carrinho-img">
                            <img src="{{ asset('site/assets/images/mouse-razer-basilisk.png') }}" alt="" />
                        </div>

                        <div class="carrinho-info">
                            <h5 class="mb-0">Mouse Razer Basilisk</h5>
                            <small class="orange-o">Acessório</small>
                            <h3 class="orange mt-3">R$ 590,00</h3>
                        </div>

                        <div class="carrinho-acao">
                            <i class="fas fa-minus"></i>
                            <input type="number" value="1" min="0" name="qtde" />
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                </div>

                <div class="col-12 mb-3">
                    <div class="carrinho-item">
                        <div class="carrinho-img">
                            <img src="{{ asset('site/assets/images/ps5.png') }}" class="wd-70" alt="" />
                        </div>

                        <div class="carrinho-info">
                            <h5 class="mb-0">Playstation 5</h5>
                            <small class="orange-o">Consoles</small>
                            <h3 class="orange mt-3">R$ 4700,00</h3>
                        </div>

                        <div class="carrinho-acao">
                            <i class="fas fa-minus"></i>
                            <input type="number" value="1" min="0" name="qtde" />
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                </div>

                <div class="col-12 mb-3">
                    <div class="carrinho-item">
                        <div class="carrinho-img">
                            <img src="{{ asset('site/assets/images/airpods-pro.png') }}" class="wd-70" alt="" />
                        </div>

                        <div class="carrinho-info">
                            <h5 class="mb-0">Airpods Pro</h5>
                            <small class="orange-o">Acessório</small>
                            <h3 class="orange mt-3">R$ 1790,00</h3>
                        </div>

                        <div class="carrinho-acao">
                            <i class="fas fa-minus"></i>
                            <input type="number" value="1" min="0" name="qtde" />
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <img src="{{ asset('site/assets/images/Whatsapp.png') }}" class="img-fluid" />
        </div>
    </div>
</div>
@endsection
