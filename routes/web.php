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
    return view('layouts.main');
})->name('layouts');


Route::get('/characters', function () {
    $title = 'Characters';
    return view('characters', compact('title'));
})->name('characters');

Route::get('/comics', function () {
    $title = 'Comics';
    return view('comics', compact('title'));
})->name('comics');
