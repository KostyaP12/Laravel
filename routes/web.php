<?php

use App\Http\Controllers\Admin\IndexController as AdminIndexController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriesController;

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

Route::get('/', [HomeController::class, "index"],)->name('home');

Route::prefix('news')
    ->group(function () {
        Route::get('/', [NewsController::class, 'index'])->name('allNews');
        Route::get('/{news}', [NewsController::class, 'oneNews'])->name('oneNews')->whereNumber('id');
        Route::get('categories/{category}', [CategoriesController::class, 'category'])->name('category');
    });

Route::name('admin.')
    ->prefix('admin')
    ->namespace('Admin')
    ->group(function () {
        Route::get('/', [AdminIndexController::class, 'index'])->name('index');
        Route::match(['get', 'post'], '/create', [AdminIndexController::class, 'create'])->name('create');
    });
Route::view('/authorization', 'authorization')->name('authorization');


Route::view('/about', 'about')->name('about');


//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
