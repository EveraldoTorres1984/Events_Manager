@extends('layouts.main')

@section('title', 'Cadastro')

@section('content')

    <div id="event-create-container" class="col-md-4 offset-md-3">
        <h1>Faça seu cadastro</h1>

        @if ($errors->any())
        <ul class="alert alert-error">
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    
        <form action="{{ route('user.register_action') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" maxlength="50" class="form-control" id="name" name="name" placeholder="Seu email">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" maxlength="50" class="form-control" id="email" name="email" placeholder="Seu email">
            </div>
            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" class="form-control" id="password" name="password" maxlength="50" placeholder="Sua senha">
            </div>
            <div class="form-group">
                <label for="password">Confirmação de senha</label>
                <input type="password" class="form-control" id="password" name="password_confirmation" maxlength="50" placeholder="Confirme sua senha">
            </div>
            <input type="submit" class="btn btn-primary" value="Cadastrar">
        </form>
    </div>

@endsection
