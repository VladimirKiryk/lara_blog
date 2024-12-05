@extends('layout')
@section('title')Удаление категорий@endsection
@section('main_content')
    <h2>Категории доступные для удаления</h2>
    <form>
    @foreach($categories as $category)
        <p> &#9899; ---   {{$category->category_title}}</p>
        <form method="get" action="/category_deleted/{{$category->id}}">
            @method('get')
            <button name="delete" class="btn btn-outline-secondary">Удалить категорию</button><br><br><br><br>
        </form>
    @endforeach

        <a type="button" href="/category" class="w-100 btn btn-lg btn-outline-primary">Категории</a>
@endsection
