@extends('layout')

@section('title')Главная страница@endsection

@section('main_content')
    <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Войти как администратор</h4>
            </div>
            <div class="card-body">
                <a type="button" class="w-100 btn btn-lg btn-outline-primary" href="/SingInAdmin">Войти как администратор</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Войти как пользователь</h4>
            </div>
            <div class="card-body">
                <a href="/SingIn" class="w-100 btn btn-lg btn-primary">Войти как пользователь</a>
            </div>
        </div>
    </div>
@endsection
