<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoriesController extends Controller
{
    public function categories(string $categoriesName, News $news, Categories $categories): View
    {
        return view('news')->with('allNews', ($categories->showCategories($news->getAllNews(), $categoriesName)));

    }
}
