@extends('layout')

@section('title')Вход как пользователь@endsection

@section('main_content')
    @if ($errors->any())
        <div class='alert alert-danger'>
            <ul
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <main class="form-signin w-100 m-auto">
        <form method="post" action="/SingIn/check">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Войти в качестве пользователя</h1>

            <div class="form-floating">
                <input type="login" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Имя пользователя</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Пароль</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Войти</button>
        </form>
    </main>
@endsection

