<?php

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
Route::get('/favorite/{id}', [PostsController::class, 'favorite'])->name('favorite');

Auth::routes();

Route::middleware('auth')->group(
    function () {
        Route::post('/publish', [PostsController::class, 'store'])->name('publish');
        Route::get('/registerPost', [PostsController::class, 'getForm']);
    }
);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
