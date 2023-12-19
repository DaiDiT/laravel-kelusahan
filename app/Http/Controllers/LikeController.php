<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function likePost(Request $request)
    {
        $postId = $request->input('post_id');
        $post = Post::find($postId);

        if ($post) {
            $like = new Like();
            $post->likes()->save($like);
        }

        $likeCount = $post->likes->count();

        return response()->json(['success' => true, 'like_count' => $likeCount]);
    }
}
