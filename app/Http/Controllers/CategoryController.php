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
        return view('category');
    }

    public function store()
    {
    }

    public function update()
    {
    }

    public function destroy()
    {
        Category::destroy(request()->id);
    }

    public function checkCategory(CheckCategoryRequest $request)
    {
        DB::beginTransaction();
        try {
            $category = new Category();
            $category->category_title = $request->input('category_title');
            $category->save();
            DB::commit();
            return view('home');

        } catch (\Exception $exception) {
            DB::rollBack();
            echo $exception->getMessage();
        }
    }
}
