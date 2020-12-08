<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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

//! se incrementeaza cu 2 unitati - PostController.php
//? post_tags (pivot table) - sunt la curent ca trebuie la singular, dar am fost nevoit sa fac asa din cauza unei erori (no table post_tags), laravel cerea tabelul asa

Route::get('/', function () {
    return redirect('/posts');
});
Route::get('/posts', [HomeController::class, 'index'])->name('home.index');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/{filter}/{id}', [HomeController::class, 'show'])->name('home.show')->where('filter', 'tag|category');


