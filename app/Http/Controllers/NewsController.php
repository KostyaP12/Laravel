<?php

namespace App\Http\Controllers;

use App\Models\AllNews;
use App\Models\Categories;
use App\Models\News;
use App\Models\OneNews;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NewsController extends Controller
{

    public function index(): View
    {
        $allNews = (new AllNews())->allNews;

        return view('news')->with('allNews', $allNews);
    }

    public function categories(string $categoriesName): View
    {
        return view('news')->with('allNews', (new Categories())->showCategories((new AllNews())->allNews, $categoriesName));

    }

    public function oneNews(int $id): ?View
    {
        $oneNews = (new OneNews())->oneNewsByID($id, (new AllNews())->allNews);

        return view('oneNews')->with('oneNews', $oneNews);

    }
}
