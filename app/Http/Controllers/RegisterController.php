<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register',  ['title' => 'Register']);
    }

    public function store(Request $request) {
        $validDatedData = $request->validate([
            'name' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => 'required|min:5|max:255'
        ]);

        // $validDatedData['password'] = bcrypt($validDatedData['password']);
        $validDatedData['password'] = Hash::make($validDatedData['password']);

        User::create($validDatedData);

     

        return redirect('/signin')->with('status', "Registrasi Berhasil");
        
    }
}
