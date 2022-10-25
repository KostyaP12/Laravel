<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index():View
    {
        return view('home');
    }

    public function categoriesMenu(Categories $categories):View
    {
        return view('categories')->with('categories', ($categories->getCategoriesId()));
    }
}
