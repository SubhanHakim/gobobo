<?php

use App\Http\Controllers\MostController;
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

Route::get('/', [MostController::class, 'index']);

Route::get('/detail', function () {
    return view("detail", ["name" => "Subhan Hakim", "title" => "Detail"]);
});

Route::get('/signin', function () {
    return view("login", ["name" => "Sigin", "title" => "Login"]);
});
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
