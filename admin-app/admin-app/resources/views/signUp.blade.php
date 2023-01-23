@extends('layout')

@section('title')Регистрация@endsection

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
    <main class="form-signup w-50 m-auto">
        <form method="post" action="signUp/check">
            @csrf
            <h1 class="h3 mb-3 fw-normal">регистрация</h1>

            <div class="form-floating">
                <input type="login" name="login" class="form-control" id="login" placeholder="Введите имя пользователя">
                <label for="floatingInput">Логин</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Пароль">
                <label for="floatingPassword">Пароль</label>
            </div>
            <div class="form-floating">
                <input type="name" name="name" class="form-control" id="name" placeholder="Настоящее имя">
                <label for="floatingInput">настоящее имя</label>
            </div>
            <div class="form-group">
                <input type="checkbox" name="is_admin" value="1" {{ old('is_admin') ? 'checked' : '' }}> Администратор
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Зарегистрироваться</button>
        </form>
    </main>
@endsection

