<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ApiArticleController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});


//Route::get('/', [TestController::class, 'home'])->name('home');
//Route::get('/home', [CategoryController::class, 'test']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::get('/quit', [ProfileController::class, 'quit']);
    Route::post('/quit_confirm', [ProfileController::class, 'quit_confirm']);

    Route::get('/show_news', [ArticleController::class, 'indexFilter']);
    Route::get('/show_news_category/{id}', [ArticleController::class, 'index']);
    Route::get('/add_news', [ArticleController::class, 'update']);
    Route::post('/check_news', [ArticleController::class, 'checkNews']);

    Route::get('/category', [CategoryController::class, 'show']);
    Route::post('/check_category', [CategoryController::class, 'checkCategory']);

    Route::get('/home', function () {
        return view('/home');
    });

    //админ
    Route::get('/destroy_news/{id}', [ArticleController::class, 'destroy']);
    Route::get('/destroy_news', [ArticleController::class, 'destroyFilter']);

    Route::get('/publ_news', [ArticleController::class, 'storeFilter']);
    Route::get('/publ_news/{id}', [ArticleController::class, 'store']);

    Route::get('/category_deleted', [CategoryController::class, 'destroyFilter']);
    Route::get('/category_deleted/{id}', [CategoryController::class, 'destroy']);

});


Route::get('/login', function () {return view('login');});
Route::get('/login', [ProfileController::class, 'login']);


Route::get('/api/show_news', [ApiArticleController::class, 'index']);
Route::get('/api/deleted/{id}', [ApiArticleController::class, 'deleted']);


Route::get('/user/{id}/{name}', function ($id, $name) {
    return 'ID ' . $id . ', NAME ' . $name;
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
