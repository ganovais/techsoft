@extends('layouts.sistema')

@section('styles')
<style>
a {
    text-decoration: none;
}

i {
    cursor: pointer;
}

.fa-trash {
    color: #d51d1d
}

.fa-pencil-alt {
    color: #3a67eb
}
</style>
@endsection

@section('content')
<!-- Modal -->
<div class="modal fade" id="modalCategory" tabindex="-1" aria-labelledby="modalCategoryLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCategoryLabel">
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
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCategory">
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
                                        <i data-id="{{ $category->id }}" class="fas fa-pencil-alt mr-3"></i>
                                        <i  data-id="{{ $category->id }}" class="fas fa-trash"></i>
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
    let categoryId = 0;

    document.addEventListener('DOMContentLoaded', () => {
        const token = document.getElementsByName('_token')[0].value;
        const saveButton = document.querySelector('#save_category');
        const input = document.querySelector('#title')

        var myModalEl = document.getElementById('modalCategory')
        myModalEl.addEventListener('hidden.bs.modal', function (event) {
            input.value = '';
            categoryId = 0;
        })

        const editList = document.querySelectorAll('.fa-pencil-alt');
        const deleteList = document.querySelectorAll('.fa-trash');

        editList.forEach(element => {
            element.onclick = () => {
                const id = element.dataset.id;
                fetch(`${BASE_URL}/${id}`)
                .then(response => response.json())
                .then(data => {
                    if(!data.error) {
                        categoryId = data.category.id;
                        input.value = data.category.title;
                        $('#modalCategory').modal('show');
                    }
                })
            }
        });

        deleteList.forEach(element => {
            element.onclick = () => {
                const id = element.dataset.id;
                fetch(`${BASE_URL}/${id}`, {
                    method: 'DELETE',
                    headers: {
                        "X-CSRF-TOKEN": token
                    },
                })
                .then(response => response.json())
                .then(data => {
                    if(!data.error) {
                        toastr.success(data.message)
                        element.parentElement.parentElement.remove();
                    }
                })
            }
        });
        saveButton.onclick = () => {
            const data = {
                title: input.value
            }

            let method = 'POST';
            let url = BASE_URL;
            if(categoryId) {
                method = 'PUT';
                url = `${BASE_URL}/${categoryId}`;
            }
            fetch(url, {
                method,
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": token
                },
                body: JSON.stringify(data)
            }).then(response => response.json())
            .then(data => {
                if(!data.error) {
                    toastr.success(data.message)
                    $('#modalCategory').modal('hide');
                    setTimeout(() => {
                        window.location.href = "/sistema/categories"
                    }, 1000);
                }
            })
        }
    })

</script>
@endsection
