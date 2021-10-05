<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::where('status', 1)->orderBy("order", "ASC")->get();

        return response()->view('category', compact('categories'));

    }

    public function show($slug)
    {
        $category = Category::where('slug', $slug)->first();

        abort_unless($category, 404);

        return response()->view('single-category', compact('category'));
    }

}
