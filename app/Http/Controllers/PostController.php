<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required | min:5 | max: 40'
        ]);
        
        $post = Post::create(
            [
                'content' => $request->get('content', null)
            ]
        );

        return redirect()->route('dashboard')->with('success', 'Post saved successfully');
    }

    public function destroy($id){
        
        Post::where('id', $id)->firstOrFail()->delete();

        return redirect()->route('dashboard')->with('success', 'Post deleted successfully');
    }
}