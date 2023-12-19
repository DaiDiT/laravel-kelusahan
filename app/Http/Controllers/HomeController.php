<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
    	return view('home.index', [
	    	'title' => 'Beranda',
	    	'posts' => Post::all()->load('user', 'comments', 'likes'),
	    	'nav_type' => 3
	    ]);
    }
}
