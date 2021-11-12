<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostLikeController extends Controller
{
    public function __construct()
    {
        # unauthenticated users can post and like
        $this->middleware(['auth']);
    }

    public function store(Post $post, Request $request)
    {
        // prevent users from liking post twice
        if ($post->likedBy($request->user())) {
            return response(null, 409);
        }

        $post->likes()->create([
            'user_id' => $request->user()->id,
        ]);

        return back();
    }
}
