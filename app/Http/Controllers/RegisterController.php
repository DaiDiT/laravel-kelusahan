<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
    	return view('register.index', [
	        'title' => 'Daftar',
	        'nav_type' => 1
	    ]);
    }

    public function store(Request $request)
    {
    	$validatedData = $request->validate([
    		'nama' => ['required', 'min:3', 'max:25'],
    		'alamat_email' => ['required', 'email:dns', 'unique:users,email'],
    		'kata_sandi' => ['required', 'min:8', 'max:255'],
    		'ulangi_kata_sandi' => ['required', 'same:kata_sandi']
    	]);


    	User::create([
    		'name' => $validatedData['nama'],
    		'email' => $validatedData['alamat_email'],
    		'password' => $validatedData['kata_sandi']
    	]);

    	return redirect('/login')->with('success', 'Akun berhasil didaftarkan. Silahkan masuk');
    }
}
