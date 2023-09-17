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

Route::get(
    '/',
    function () {
        return view('welcome');
    }
);

Route::get('/posts', [PostsController::class, 'index'])->name('posts');



Auth::routes();

Route::middleware('auth')->group(
    function () {
        Route::get('/edit/{id}', [PostsController::class, 'getupdate'])->name('getupdate');
        Route::put('/update/{id}', [PostsController::class, 'update'])->name('update');
        Route::post('/publish', [PostsController::class, 'store'])->name('publish');
        Route::get('/getstore', [PostsController::class, 'getStore'])->name('getstore');
        Route::get('/registerPost', [PostsController::class, 'getForm']);
        Route::post('/favorite', [FavoritieController::class, 'favorite'])->name('favorite');
        Route::get('/favoritiesposts', [FavoritieController::class, 'index']);
    }
);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
