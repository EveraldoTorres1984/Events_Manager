@extends('layouts.main')

@section('title', 'Login')

@section('content')

    <div id="event-create-container" class="col-md-4 offset-md-3">
        <h1>Faça o Login</h1>
        <form action="{{route('user.login_action')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" maxlength="50" class="form-control" id="email" name="email" placeholder="Seu email">
            </div>
            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" class="form-control" id="password" name="password" maxlength="50" placeholder="Sua senha">
            </div>
            <input type="submit" class="btn btn-primary" value="Entrar">
        </form>
    </div>

@endsection
