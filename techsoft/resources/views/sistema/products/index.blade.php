@extends('layouts.sistema')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Produtos</h1>
            </div>

            <div class="col-sm-6 text-right">
                <a class="btn btn-primary" href="{{ url('/sistema/products/create') }}">
                    Cadastrar <i class="ml-1 fas fa-plus"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->title }}</td>
                                    <td class="text-right">
                                        <a href="{{ url('/sistema/products/'. $product->id . '/edit') }}">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <i  data-id="{{ $product->id }}" class="fas fa-trash"></i>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td>Não há categorias ainda!</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
