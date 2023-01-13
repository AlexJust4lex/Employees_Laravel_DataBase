@extends('layout')
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
    <main>
        <form method="post" action="/adminPage/check">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Добавить</h1>
            <input type="date" name="date" id="date" placeholder="Введите дату" class="form-control"><br>
            <input type="worker" name="worker" id="worker" placeholder="Кто делал" class="form-control"><br>
            <input type="job" name="job" id="job" placeholder="Что делал" class="form-control"><br>
            <input type="status" name="status" id="status" placeholder="Статус" class="form-control"><br>
            <input type="mate" name="mate" id="mate" placeholder="С кем делал" class="form-control"><br>
            <input type="payment" name="payment" id="payment" placeholder="Оплата" class="form-control"><br>
            <input type="comments" name="comments" id="comments" placeholder="Комментарии" class="form-control"><br>
            <input type="job_type" name="job_type" id="job_type" placeholder="Тип работы" class="form-control"><br>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Добавить</button>
        </form>
    </main>
@endsection

