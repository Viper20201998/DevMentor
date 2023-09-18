<?php

use App\Http\Controllers\FavoritieController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/posts', [PostsController::class, 'index'])->name('posts');
Route::get(
    '/',
    function () {
        return view('paginas.home');
    }
);


Route::get(
    '/introduction',
    function () {
        return view('paginas.introduction');
    }
);

Route::get(
    '/content',
    function () {
        return view('paginas.content');
    }
);



Auth::routes();

Route::middleware('auth')->group(
    function () {
        Route::get('/edit/{id}', [PostsController::class, 'getupdate'])->name('getupdate');
        Route::put('/update/{id}', [PostsController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [PostsController::class, 'destroy'])->name('delete');
        Route::post('/publish', [PostsController::class, 'store'])->name('publish');
        Route::get('/getstore', [PostsController::class, 'getStore'])->name('getstore');
        Route::get('/registerPost', [PostsController::class, 'getForm']);
        Route::post('/favorite', [FavoritieController::class, 'favorite'])->name('favorite');
        Route::get('/favoritiesposts', [FavoritieController::class, 'index'])->name('favoritiesposts');
        Route::delete('/deletefavorite/{id}', [FavoritieController::class, 'deletefavorite'])->name('deletefavorite');
    }
);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get(
    '/home',
    function () {
        return view('paginas.home');
    }
);

Route::get(
    '/introduction',
    function () {
        return view('paginas.introduction');
    }
);

Route::get(
    '/content',
    function () {
        return view('paginas.content');
    }
);


Route::get(
    '/mysql',
    function () {
        return view('paginas.mysql');
    }
);

Route::get(
    '/mongodb',
    function () {
        return view('paginas.mongodb');
    }
);
