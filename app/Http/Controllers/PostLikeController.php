<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;
use App\Models\Post;

class PostLikeController extends Controller
{
    public function store(Request $request, Post $post)
    {   
        Like::create([
            'post_id' => $post->id,
            'user_id' => auth()->user()->id,
        ]);

        return redirect($request['current_url']);
    }

    public function destroy(Post $post)
    {
        $like = Like::select('id')->where('post_id', $post->id)
                                  ->where('user_id', auth()->user()->id)
                                  ->get();
        Like::destroy($like);

        return redirect('/');
    }
}
