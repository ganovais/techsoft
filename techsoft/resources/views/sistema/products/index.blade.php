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
    margin-right: 10px;
    color: #3a67eb
}
</style>
@endsection

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
                                    <td>Não há produtos ainda!</td>
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
    const BASE_URL = "{{ url('/sistema/products') }}"
    let categoryId = 0;

    document.addEventListener('DOMContentLoaded', () => {
        const token = document.getElementsByName('_token')[0].value;
        const deleteList = document.querySelectorAll('.fa-trash');

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

    })

</script>
@endsection
