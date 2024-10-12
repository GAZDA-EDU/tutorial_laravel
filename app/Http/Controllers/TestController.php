<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class TestController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('test', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::find($id);

        return $post;
    }

    public function store(Request $request)
    {
        $post = new Post();

        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        $posts = DB::table('posts')->get();
        return $posts;
    }

    public function create()
    {
        return view('create');
    }

    public function edit($id)
    {
        $post = Post::find($id);

        return view('edit',compact('post'));
    }

    public function update($id, Request $request)
    {
        $post = Post::find($id);

        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return 'post is updated';
    }

    public function destroy($id)
    {
        Post::find($id)->delete();

        return 'post is deleted';
    }
}
