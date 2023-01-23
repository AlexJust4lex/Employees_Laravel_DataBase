@extends('layout')

@section('title')Главная страница@endsection

@section('main_content')
    <main  class = "w-50 m-auto">
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Войти в систему</h4>
                </div>
                <div class="card-body">
                    <a type="button" class="w-100 btn btn-lg btn-outline-primary" href="/SingIn">Войти в систему</a>
                 </div>
                <!--<div class="card-body">
                    <a type="button" class="w-100 btn btn-lg btn-outline-primary" href="/signUp">Зарегистрироваться</a>
                </div> -->
            </div>
        </div>
    </main>


@endsection
