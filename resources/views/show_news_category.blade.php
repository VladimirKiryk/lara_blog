@extends('layout')
@section('title')
    Просмотр новостей
@endsection


@section('main_content')
    <div>
        @foreach($articles as $element)
            <h3>{{$element->title}}</h3>
            <b>{{$element->description}}</b>
            <p>{{$element->content}}</p>
        @endforeach
            <a href="/show_news" class="btn btn-outline-secondary">Вернуться к выбору категорий</a>
    </div>
@endsection

