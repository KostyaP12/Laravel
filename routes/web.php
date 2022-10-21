<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, "index"])->name('home');

Route::prefix('news')
    ->group(function () {
        Route::get('/', [NewsController::class, 'index'])->name('allNews');
        Route::get('/{id}', [NewsController::class, 'oneNews'])->name('oneNews');
        Route::get('/categories/{categories}', [NewsController::class, 'categories'])->name('categories');
        Route::redirect('/categories/news/categories/tourism', '/news/categories/tourism');
        Route::redirect('/categories/news/categories/economy', '/news/categories/economy');
        Route::redirect('/categories/news/categories/science', '/news/categories/science');
        Route::redirect('/categories/news/categories/sport', '/news/categories/port');
        Route::redirect('/categories/news/categories/politics', '/news/categories/politics');
    });

Route::view('/authorization', 'authorization');
Route::view('/add', 'addNews');

Route::get('/about', function () {
    return view('about');
});


