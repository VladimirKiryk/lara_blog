<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Facades\DB;

class ApiArticleController extends Controller
{
    public function index():object
    {
        $articles = Article::all();
        $articles->load('category');
        return response()->json($articles);
    }
    public function deleted($id)
    {
        DB::beginTransaction();
        try {
            Article::findOrFail($id)->delete();
            DB::commit();
            return "Deleted complete";
        } catch (\Exception $exception) {
            DB::rollBack();
            echo $exception->getMessage();

        }
    }
}
