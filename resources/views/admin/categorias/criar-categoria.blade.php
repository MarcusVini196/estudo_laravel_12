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
                <h1 class="h3 mb-4 text-gray-800">Adicionar Categoria</h1>
                <form action="{{ route('categorias.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nome">Nome da Categoria</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <textarea class="form-control" id="descricao" name="descricao" rows="3" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Adicionar Categoria</button>
                </form>
            </div>
        </div>
    </div>
@endsection
