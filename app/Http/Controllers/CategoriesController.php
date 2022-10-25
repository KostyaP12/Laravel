<?php

namespace App\Http\Controllers;

use App\Models\Categories;

use Illuminate\View\View;

class CategoriesController extends Controller
{
    public function categories(string $categoriesName, Categories $categories): View
    {
        return view('news.news')->with('allNews', ($categories->showCategories($categoriesName)));

    }
}
