@extends('layout')

@section('title')Добавить новость@endsection

@section('main_content')
    <h1>Расскажите свою интересную новость!</h1><br>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

<form action="/check_news" method="post">
    @csrf
    Выберите категорию <br>
   <select name="category_id">
           @foreach($categories as $category)
           <option value="{{$category->id}}">{{$category->category_title}}</option>
       @endforeach
   </select><br><br>
    <input type="text" name="title" id="title" placeholder="Напишите заголовок" class="form-control"><br>
    <input type="text" name="description" id="description" placeholder="Краткое описание" class="form-control"><br>
    <textarea type="text" name="content" id="content" placeholder="Расскажите что произошло" class="form-control"></textarea><br>
    <button type="submit" class="btn btn-outline-secondary">Отправить новость</button>
</form>
    <a type="button" href="/home" class="w-100 btn btn-lg btn-outline-primary">На главную страницу</a>
@endsection
