<?php

namespace App\Http\Controllers;


use App\Http\Requests\CheckNewsRequest;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function indexFilter()
    {
        $categories = Category::all();
        return view('show_news', ['categories' => $categories]);
    }

    public function index($id)
    {
        $categories = Category::all();
        $articles = Article::where('category_id', $id)->get();
        return view('show_news_category', ['articles' => $articles, 'categories' => $categories]);
    }

    public function store($id)
    {
        DB::beginTransaction();
        try {
            Article::find($id)->update(['published_at' => date("Y-m-d H:i:s")]);
            DB::commit();
            return view('home');
        } catch (\Exception $exception) {
            echo $exception->getMessage();
            DB::rollBack();

        }
    }

    public function storeFilter()
    {
        $articles = Article::whereNull('published_at')->get();

        return view('publ_news', ['news' => $articles]);
    }

    public function update()
    {
        $categories = Category::all();
        return view('add_news', ['categories' => $categories]);
        //return view('add_news');
    }

    public function destroyFilter()
    {
        $articles = Article::all();

        return view('destroy_news', ['articles' => $articles]);
    }

    public function destroy($id)
    {
        dd($id);
        DB::beginTransaction();
        try {
            Article::findOrFail($id)->delete();
            DB::commit();
            return view('destroy_news_ok');
        } catch (\Exception $exception) {
            DB::rollBack();
        }
    }


    public function checkNews(CheckNewsRequest $request)
    {

        DB::beginTransaction();
        try {
            $article = new Article();
            $article->title = $request->input('title');
            $article->description = $request->input('description');
            $article->content = $request->input('content');
            $article->email = $request->input('email');
            $article->category_id = $request->input('category_id');
            $article->save();
            DB::commit();
            return view('home');
        } catch (\Exception $exception) {
            DB::rollBack();
        }
    }
}
