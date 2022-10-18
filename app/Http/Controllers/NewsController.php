<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NewsController extends Controller
{

    public function index(News $news): View
    {
        return view('news.news')->with('allNews', $news->getAllNews());
    }


    public function oneNews(int $id, News $news): ?View
    {

        return view('oneNews')->with('oneNews', $news->getOneNewsByID($id));

    }
}
