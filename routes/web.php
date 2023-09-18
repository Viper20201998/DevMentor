<?php

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


Route::get('/', function () {
    return view('paginas.home');
});


Route::get('/introduction', function () {
    return view('paginas.introduction');
});

Route::get('/content', function () {
    return view('paginas.content');
});


Route::get('/mysql', function () {
    return view('paginas.mysql');
});

Route::get('/mongodb', function () {
    return view('paginas.mongodb');
});