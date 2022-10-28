<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function index(): View
    {
        return view('admin.index');
    }

    public function create(Request $request, Categories $categories, News $news)
    {
        if ($request->isMethod('post')) {

            $allNews = $news->getAllNews();


            $allNews[] = [
                'title' => $request->title,
                'text' => $request->text,
                "isPrivate" => isset($request->isPrivate),
                "category_id" => $request->category
            ];

            $id = array_key_last($allNews);
            $allNews[$id] =
                [
                   'id' => $id
                ];

            Storage::disk('local')->put('news.json', json_encode($allNews, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));

            return redirect()->route('oneNews', ['id' => $id]);
        }

        return view('admin.create', [
            'categories' => $categories->getCategories()
        ]);
    }
}
