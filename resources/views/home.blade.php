@extends('layout')
@section('title')Главная страница@endsection
@section('main_content')
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h1 class="display-4 fw-normal text-body-emphasis">Главная</h1>
        <p>Рады приветствовать Вас на нашем сайте!</p>
        <main>
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-body">
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Узнайте что же</li>
                                <li>случилось в мире</li>
                                <li>за последние пару</li>
                                <li>дней</li>
                            </ul>
                            <a type="button" href="/show_news" class="w-100 btn btn-lg btn-outline-primary">Просмотр новостей</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-body">
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Стали свидетелем</li>
                                <li>интересной новости</li>
                                <li>или события?</li>
                                <li>Расскажите нам</li>
                            </ul>
                            <a href="/add_news" type="button" class="w-100 btn btn-lg btn-outline-primary">Добавить новость</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-body">
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Опубликуйте</li>
                                <li>интересную</li>
                                <li>свою </li>
                                <li>новость</li>

                            </ul>
                            <a href="/publ_news" type="button" class="w-100 btn btn-lg btn-outline-primary">Публикация новостей</a>
                        </div>
                    </div>
                </div>
        </main>
    </div>
    </header>
    </body>
    </html>
@endsection
