<?php

use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\MostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

use App\Models\Category;
use App\Models\dataPopular;
use App\Models\dataTreasure;
use App\Models\feature;
use App\Models\Information;
use App\Models\mostPicked;
use App\Models\Post;
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

Route::get('/detail/{post:slug}', function (Post $Post) {
    return view("detail", [
        "title" => "Detail",
        "detail" => $Post,
        "imgFeature" => feature::all(),
        "sures" => dataTreasure::all()
    ]);
});

Route::get('/signin', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/signin', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/categories', function() {
    return view('categories', [
        'title'=> 'Post Categorie',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('category', [
        'title'=> $category->name,
        'posts' => $category->posts,
        'category' => $category->name 
    ]);
});

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');


Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware("auth");
