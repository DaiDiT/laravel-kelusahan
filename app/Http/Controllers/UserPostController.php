<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserPostController extends Controller
{
    public function index(User $user)
    {
    	if (auth()->user()->id == $user->id) {
			return view('users.index', [
	    		'title' => $user->name,
	    		'posts' => $user->posts,
	    		'nav_type' => 3
	    	]);
    	} else {
			return view('errors.404');
		}
    }
}
