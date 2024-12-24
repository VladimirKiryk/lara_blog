@extends('layout')
@section('title')
    Профиль
@endsection
@section('main_content')
    <form>
        Имя
        <b>{{$user->name}}</b><br>
        Ваш Email
        <b>{{$user->email}}</b>
    </form>
    <br>
    <a type="button" href="/home" class="w-5 btn btn-lg btn-outline-primary">На главную</a>
    <a href="/quit" class="btn btn-outline-secondary">Выход</a>
@endsection
