<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts');
    }

    public function store(Request $request)
    {
        # validate input
        $this->validate($request, [
            'body' => 'required'
        ]);

        /* currently authenticate user needs to have more than one more posts */
        $request->user()->posts()->create([
            'body' => $request->body,
        ]);

        return back();
    }
}
