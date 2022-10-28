<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\View\View;

class CategoriesController extends Controller
{
    public function category(string $categoriesName): View
    {
        return view('news.index',
            [
                'allNews' => Categories::query()->where('slug', $categoriesName)->first()->news,
                'categories' => Categories::query()->get()
            ]);
    }
}
