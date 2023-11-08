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
    $data_terbaru = [
        [
            "Title" => "travelers",
            "total" => 80409,
            "image" => "assets/bed.svg"
        ],
        [
            "Title" => "treasure",
            "total" => 987,
            "image" => "assets/photo_camera.svg"
        ],
        [
            "Title" => "cities",
            "total" => 873,
            "image" => "assets/add_location_alt.svg"
        ]
    ];
    return view("home", [
        "title" => "Home",
        "posts" => $data_terbaru
    ]);
});

Route::get('/detail', function () {
    return view("detail", ["name" => "Subhan Hakim", "title" => "Detail"]);
});
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
