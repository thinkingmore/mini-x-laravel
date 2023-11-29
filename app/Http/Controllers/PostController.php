<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $post = Post::create(
            [
                'content' => $request->get('content', null)
            ]
        );

        return redirect()->route('dashboard')->with('success', 'Post saved successfully');
    }
}