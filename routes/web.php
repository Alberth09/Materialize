<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('Principal');
})->name('Principal');

Route::get('/Animales', function () {
    return view('Animales');
})->name('Animales');

Route::get('/Ciudad', function () {
    return view('Ciudad');
})->name('Ciudad');


