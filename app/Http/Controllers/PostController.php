<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function show(Post $post){
        return view('posts.post', compact('post'));
    }
    
    
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

    public function edit(Post $post){
        $editing = true;
        return view('posts.post', compact('post', 'editing'));
    }

    public function update(Post $post){
        request()-> validate([
            'content' => 'required | min:3 | max: 240'
        ]);

        $post -> content = request()->get('content', '');
        $post -> save();

        return redirect()->route('post.show', $post->id)->with('success', 'Post has been updated successfully');
    }
}