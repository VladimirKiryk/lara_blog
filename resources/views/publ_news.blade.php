@extends('layout')
@section('title')
    Публикация новости
@endsection
@section('main_content')
    <h1>Статьи ожидающие публикацию</h1>
    @foreach($news as $element)
        <div class="me-3 py-2 link-body-emphasis text-decoration-none">
            <h3>{{$element->title}}</h3>
            <b>{{$element->description}}</b>
            <p>{{$element->content}}</p>
            <form method="get" action="/publ_news/{{$element->id}}">
                @method('get')
                <button name="publish" class="btn btn-outline-secondary">Опубликовать новость</button>
            </form>
            @endforeach
        </div>
        <a type="button" href="/home" class="w-100 btn btn-lg btn-outline-primary">На главную страницу</a>


        @endsection
