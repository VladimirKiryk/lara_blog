@extends('layout')
@section('title')
    Удалить новость
@endsection
@section('main_content')
    Выберите запись для удаления
    @foreach($articles as $element)
        <div class="me-3 py-2 link-body-emphasis text-decoration-none">
            <h3>{{$element->title}}</h3>
            <b>{{$element->description}}</b>
            <p>{{$element->content}}</p>
            <form method="get" action="/destroy_news/{{$element->id}}">
                @method('get')
                <button name="delete" class="btn btn-outline-secondary">Удалить новость</button>
            </form>
            @endforeach
            <a type="button" href="/home" class="w-100 btn btn-lg btn-outline-primary">На главную страницу</a>

        </div>

        @endsection
