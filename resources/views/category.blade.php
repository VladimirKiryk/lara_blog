@extends('layout')
@section('title')
    Категории
@endsection
@section('main_content')
    <h1>Категории</h1>
    @foreach($categories as $category)
        <p> &#9899; ---   {{$category->category_title}}</p>
    @endforeach
    <h3>Не нашли нужную категорию? Добавьте её</h3>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/check_category" method="post">
        @csrf
        <input type="text" name="category_title" id="category_title" placeholder="Введите новую категорию"
               class="form-control"><br>
        <button type="submit" class="btn btn-outline-secondary">Добавить</button><br><br>
    </form>
    <a href="/category_deleted" class="btn btn-outline-secondary">Удалить категорию</a><br><br>

    <a type="button" href="/home" class="w-100 btn btn-lg btn-outline-primary">На главную страницу</a>
@endsection
