<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Http\Requests\CheckCategoryRequest;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {

    }

    public function show()
    {
        $categories = Category::all();
        return view('category', ['categories' => $categories]);
    }

    public function store()
    {
    }

    public function destroyFilter()
    {
        $categories = Category::all();
        return view('category_deleted', ['categories' => $categories]);
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            Category::findOrFail($id)->delete();
            DB::commit();
            return view('category_deleted_ok');
        } catch (\Exception $exception) {
            DB::rollBack();
        }
    }


    public function checkCategory(CheckCategoryRequest $request)
    {
        $categories = Category::all();
        DB::beginTransaction();
        try {
            $category = new Category();
            $category->category_title = $request->input('category_title');
            $category->save();
            DB::commit();
            return view('category', ['categories' => $categories]);

        } catch (\Exception $exception) {
            DB::rollBack();
            echo $exception->getMessage();
        }
    }
}
