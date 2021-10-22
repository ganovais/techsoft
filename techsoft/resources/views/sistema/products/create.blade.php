@extends('layouts.sistema')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Produtos</h1>
            </div>

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <a href="{{ url('sistema/products') }}">Produtos</a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title" id="title">Cadastrando</h3>
                    </div>
                    <form method="POST" id="save" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Título</label>
                                        <input type="text" class="form-control" name="title" id="title_input"
                                            placeholder="Título">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Preço</label>
                                        <input type="number" class="form-control" name="price" id="price_input"
                                            placeholder="Preço">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Imagem</label>
                                        <input type="file" class="form-control" name="image" id="image_input">
                                        <img id="product_image" src="" width="200">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Categoria</label>
                                        <select id="category_input" class="form-control" name="category_id">
                                            @foreach($categories as $category)
                                            <option value="{{ $category->id }}">
                                                {{ $category->title }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">Descrição</label>
                                        <textarea id="description_input" class="form-control"
                                            name="description"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    const BASE_URL = '{{ url("/sistema/products") }}';
    const PATH_URL = '{{ url("") }}';
    const product = {!! (isset($product)) ? json_encode($product): 'null' !!};

    document.addEventListener('DOMContentLoaded', () => {
        const title = document.querySelector('#title_input');
        const price = document.querySelector('#price_input');
        const category = document.querySelector('#category_input');
        const description = document.querySelector('#description_input');
        const form = document.querySelector('#save');
        const token = document.getElementsByName('_token')[0].value;
        const image = document.querySelector('#product_image');
        const file = document.querySelector("#image_input");

        console.log(product);
        if(product && product.id) {
            title.value = product.title;
            price.value = product.price;
            description.value = product.description;
            category.value = product.category.id;
            if(product.image) {
                image.src = PATH_URL + product.image.path;
            }
        }

        form.onsubmit = () => {
            if(!image.src && (file.value == "" || !file.value)) {
                toastr.warning('Escolher um arquivo para salvar.');
                return false;
            }
            const formData = new FormData(form);
            let url = BASE_URL;
            if(product && product.id) {
                url = BASE_URL + '/' + product.id;
            }

            fetch(url, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': token
                },
                body: formData
            }).then(response => response.json())
            .then(data => {
                if(!data.error) {
                    toastr.success(data.message)
                    setTimeout(() => {
                        window.location.href = "/sistema/products"
                    }, 1000);
                }
            })

            return false
        }

    })
</script>
@endsection
