@extends('layouts.site')

@section('content')

<div class="banner-top">
    <div class="banner-top-blur"></div>
    <h1 class="title-blur">CONTATO</h1>
</div>

<div class="container mt-5 mb-5">
    <div class="contato">
        <div class="row mb-3">
            <div class="col-12 text-center">
                <h3>Entre em contato</h3>
            </div>
        </div>

        <div class="contato-card">
            <form action="">
                <div class="row">
                    <div class="mb-3 col-12 col-md-6">
                        <label class="form-label">Nome</label>
                        <input type="text" name="name" class="form-control" placeholder="Seu nome*" required />
                    </div>

                    <div class="mb-3 col-12 col-md-6">
                        <label class="form-label">Telefone</label>
                        <input type="tel" class="form-control" name="phone" placeholder="(11) 12345-6789" />
                    </div>

                    <div class="mb-3 col-12">
                        <label class="form-label">E-mail</label>
                        <input type="email" class="form-control" name="email" placeholder="exemplo@exemplo.com" />
                    </div>

                    <div class="mb-3 col-12">
                        <label class="form-label">Assunto</label>
                        <input type="text" class="form-control" name="subject" placeholder="Assunto" />
                    </div>

                    <div class="mb-3 col-12">
                        <label class="form-label">Mensagem</label>
                        <textarea name="message" class="form-control" rows="2" placeholder="Mensagem..."></textarea>
                    </div>
                </div>

                <div class="col-12 mt-4">
                    <button class="btn float-end btn-orange btn-theme">
                        <p class="mb-0">Enviar</p>
                        <i class="far fa-paper-plane"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
