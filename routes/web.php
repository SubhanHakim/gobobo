<?php

use App\Http\Controllers\MostController;
use App\Models\dataPopular;
use App\Models\dataTreasure;
use App\Models\feature;
use App\Models\mostPicked;
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

Route::get('/detail/{slug}', function ($slug) {
    return view("detail", [
        "title" => "Detail",
        "detail" => mostPicked::find($slug),
        "feature" => feature::all(),
        "sures" => dataTreasure::all()
    ]);
});

Route::get('/signin', function () {
    return view("login", ["name" => "Sigin", "title" => "Login"]);
});
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
