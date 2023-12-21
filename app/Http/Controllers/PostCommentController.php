<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class PostCommentController extends Controller
{
    public function store(Request $request, Post $post)
    {
    	$validatedData = $request->validate([
    		'body' => ['required', 'min:3', 'max:5000'],
    	]);

    	$validatedData['user_id'] = auth()->user()->id;
    	$validatedData['post_id'] = $post->id;
    	Comment::create($validatedData);

    	return redirect($request['current_url'])->with('success', 'Komentar berhasil dibuat');
    }

    public function edit(Post $post, Comment $comment)
	{	
		if (auth()->user()->id == $comment->user->id) {
			return view('posts.comments.edit', [
				'title' => 'Edit Komentar',
				'post' => $post,
				'comment' => $comment,
				'nav_type' => 3
			]);
		} else {
			return view('errors.404');
		}
	}

	public function update(Request $request, Post $post, Comment $comment)
	{
		$request->validate([
    		'body' => ['required', 'min:3', 'max:5000'],
    	]);

    	$comment->body = $request['body'];
    	$comment->save();

    	return redirect('/posts/' . $post->id)->with('success', 'Komentar berhasil diubah');
	}

	public function destroy(Post $post, Comment $comment)
	{
		
    	Comment::destroy($comment->id);

    	return redirect('/posts/' . $post->id)->with('success', 'Komentar berhasil dihapus');;
	}
}