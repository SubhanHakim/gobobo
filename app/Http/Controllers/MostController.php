<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;
class MostController extends Controller
{
    public function index() {
        return view("home", [
            "title" => "Home",
            "posts" => \App\Models\dataTotal::all(),
            "lists" => \App\Models\Post::latest()->get(),
            "populs" => \App\Models\dataPopular::all(),
        ]);
    }
}
