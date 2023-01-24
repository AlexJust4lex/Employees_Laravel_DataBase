@extends('layout')

@section('title')Страница пользователя@endsection

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
    <main class="form- w-100 m-auto">
        <form>
            <h1 class="h3 mb-3 fw-normal">Пользователь</h1>
            <h1>Вся информация<h1>
                    <h5><table class="table">
                            <tr><td> Номер </td><td> Создан в </td><td> Последнее изменение </td><td> Дата </td><td> Кто делал </td><td> Что делал </td><td> Статус </td><td> С кем работал </td><td> Оплата </td><td> Комментарии </td><td> Тип работы </tr>
                            @foreach($reviews as $el)
                                <tr><td> {{$el->number}} </td><td> {{$el->created_at}} </td><td> {{$el->updated_at}} </td><td> {{$el->date}} </td><td> {{$el->worker}} </td><td> {{$el->job}} </td><td> {{$el->status}} </td><td> {{$el->mate}} </td><td> {{$el->payment}} </td><td> {{$el->comments}} </td><td> {{$el->job_type}} </tr>
                            @endforeach
                        </table></h5>
            @yield('add_content')
        </form>
    </main>
@endsection

