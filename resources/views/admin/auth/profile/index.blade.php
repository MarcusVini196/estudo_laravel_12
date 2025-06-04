@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center mb-4">
            <a href="{{ route('admin.dashboard') }}" class="h3 mb-0 text-gray-800">Dashboard</a>
            <p class="h3 mb-0 p-3 text-gray-800"> > </p>
            <h1 class="h3 mb-0 text-gray-800">Perfil</h1>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="" class="">
                            <div class="form-group">
                                <label for="name">Nome</label>
                                <input type="text" class="form-control" id="name" name="nome"
                                    value="{{ Auth::user()->nome }}" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ Auth::user()->email }}" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="" class="">
                            <div class="form-group">
                                <label for="password">Senha Atual</label>
                                <input type="password" class="form-control" id="password" name="password_currente"
                                    value="{{ old('password_current') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="password">Nova Senha</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    value="{{ old('password') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="password_confirmation">Confirme Senha</label>
                                <input type="password" class="form-control" id="password_confirmation"
                                    name="password_confirmation" value="{{ old('password_confirmation') }}" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
