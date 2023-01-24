@extends('layout')

@section('title')Вход в систему@endsection

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
    <main class="form-signin w-50 m-auto">
        <form method="post" action="/login">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Войти в систему</h1>

            <div class="form-floating">
                <input type="login" name="login" class="form-control" id="login" placeholder="Введите имя пользователя">
                <label for="floatingInput">Логин</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password"class="form-control" id="password" placeholder="Пароль">
                <label for="floatingPassword">Пароль</label>
            </div>
            <div>
                <input style="margin: 10px;" type="checkbox" name="remember" value="0"> Запомнить меня
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Войти</button>
        </form>
    </main>
@endsection

