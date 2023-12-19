<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
    	return view('posts.index', [
	    	'title' => 'Pencarian',
	    	'posts' => Post::latest()->filter()->get(),
	    	'nav_type' => 3
	    ]);
    }

    public function store(Request $request)
    {
    	$validatedData = $request->validate([
    		'body' => ['required', 'min:3', 'max:5000'],
    	]);

    	$validatedData['user_id'] = auth()->user()->id;
    	Post::create($validatedData);

    	return redirect('/')->with('success', 'Postingan berhasil dibuat');
    }

    public function show(Post $post)
    {
	    return view('posts.detail', [
	    	'title' => 'Postingan',
	    	'post' => $post->load('comments', 'likes'),
	        'nav_type' => 3
	    ]);
	}

	public function edit(Post $post)
	{	
		if (auth()->user()->id == $post->user->id) {
			return view('posts.edit', [
				'title' => 'Edit Postingan',
				'post' => $post,
				'nav_type' => 3
			]);
		} else {
			return view('errors.404');
		}
	}

	public function update(Request $request, Post $post)
	{
		$request->validate([
    		'body' => ['required', 'min:3', 'max:5000'],
    	]);

    	$post->body = $request['body'];
    	$post->save();

    	return redirect('/posts/' . $post->id)->with('success', 'Postingan berhasil diubah');
	}

	public function destroy(Post $post)
	{
		
    	Post::destroy($post->id);

    	return redirect('/')->with('success', 'Postingan berhasil dihapus');;
	}
}