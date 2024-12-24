@extends('layout')
@section('title')
    Выход
@endsection
@section('main_content')
    <form action="/quit_confirm" method="post">
        @csrf
        <button type="submit" class="btn btn-outline-secondary">Подтвердить выход</button>
        <br><br>
        <a type="button" href="/profile" class="w-10 btn btn-lg btn-outline-primary">Назад</a>
    </form>
@endsection
