@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <h1 class="h3 mb-4 text-gray-800">Adicionar Produto</h1>
                <form action="{{ route('produtos.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="imagem">Imagem do Produto</label>
                        <input type="file" class="form-control-file" id="imagem" name="imagem" accept="image/*">
                    </div>
                    <div class="form-group">
                        <label for="nome">Nome do Produto</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <textarea class="form-control" id="descricao" name="descricao" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="preco">Preço</label>
                        <input type="number" class="form-control" id="preco" name="preco" step="0.01" required>
                    </div>
                    <div class="form-group">
                        <label for="quantidade">Quantidade em Estoque</label>
                        <input type="number" class="form-control" id="quantidade" name="quantidade" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Adicionar Produto</button>
                </form>
            </div>
        </div>
    </div>
@endsection
