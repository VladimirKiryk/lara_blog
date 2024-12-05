<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/', [TestController::class, 'home'])->name('home');
//Route::get('/home', [CategoryController::class, 'test']);
Route::get('/home', function () {
    return view('home');
});
Route::get('/show_news', [ArticleController::class, 'indexFilter']);
Route::get('/show_news_category/{id}', [ArticleController::class, 'index']);

Route::get('/add_news', [ArticleController::class, 'update']);

Route::post('/check_news', [ArticleController::class, 'checkNews']);

Route::post('/check_category', [CategoryController::class, 'checkCategory']);

Route::get('/destroy_news/{id}', [ArticleController::class, 'destroy']);
Route::get('/destroy_news', [ArticleController::class, 'destroyFilter']);

Route::get('/category', [CategoryController::class, 'show']);
Route::get('/category_deleted', [CategoryController::class, 'destroyFilter']);
Route::get('/category_deleted/{id}', [CategoryController::class, 'destroy']);

Route::get('/publ_news', [ArticleController::class, 'storeFilter']);
Route::get('/publ_news/{id}', [ArticleController::class, 'store']);


Route::get('/user/{id}/{name}', function ($id, $name) {
    return 'ID ' . $id . ', NAME ' . $name;
});
