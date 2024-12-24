@extends('layout')
@section('title')
    Выбор категории для просмотра
@endsection


@section('main_content')
    @csrf
    Выберите категорию <br>
    @foreach($categories as $category)
        <option value="{{$category->id}}"></option>
        <form method="get" action="/show_news_category/{{$category->id}}">
            @method('get')
            <button type="submit" class="btn btn-outline-secondary">{{$category->category_title}}</button>
        </form>
    @endforeach
    <br>
    <a type="button" href="/home" class="w-100 btn btn-lg btn-outline-primary">На главную страницу</a>

@endsection

