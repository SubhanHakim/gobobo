<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class MostController extends Controller
{
    public function index() {
        return view("home", [
            "title" => "Home",
            "posts" => \App\Models\dataTotal::all(),
            "lists" => \App\Models\mostPicked::all()
        ]);
    }
}
