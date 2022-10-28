<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\News;
use Illuminate\View\View;

/**
 * Class NewsController
 * @package App\Http\Controllers
 */
class NewsController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $news = News::query()->get();
        $categories = Categories::query()->get();
        return view('news.index', ['allNews' => $news, 'categories' => $categories]);
    }

    /**
     * @param News $news
     * @return View|null
     */
    public function oneNews(News $news): ?View
    {
        return view('news.one')->with('oneNews', $news);
    }


}
