@extends('layouts.sistema')

@section('content')

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Cadastrar categoria
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label>Título</label>
                    @csrf
                    <input type="text" class="form-control" id="title"
                    placeholder="Título">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="button" id="save_category" class="btn btn-primary">
                    Salvar
                </button>
            </div>
        </div>
    </div>
</div>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Categorias</h1>
            </div>

            <div class="col-sm-6 text-right">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Cadastrar <i class="ml-1 fas fa-plus"></i>
                </button>
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
                                @forelse($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->title }}</td>
                                    <td class="text-right">
                                        <a href="{{ url('sistema/categories/' . $category->id . '/edit')}}">
                                            <i class="fas fa-pencil-alt mr-3"></i>
                                        </a>

                                        <a href="#" data-id="{{ $category->id }}" class="delete">
                                            <i class="fas fa-trash"></i>
                                        </a>
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

@section('scripts')
<script>
    const BASE_URL = "{{ url('/sistema/categories') }}"
    const token = document.getElementsByName('_token')[0].value;
    const saveButton = document.querySelector('#save_category');
    const input = document.querySelector('#title')

    saveButton.onclick = () => {
        const data = {
            title: input.value
        }

        fetch(BASE_URL, {
            method: 'POST',
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": token
            },
            body: JSON.stringify(data)
        })
    }
</script>
@endsection
