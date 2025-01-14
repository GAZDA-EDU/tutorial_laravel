<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostStoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

class TestController extends Controller
{
    public function index()
    {
    $user = User::find(1);
    $profile = $user->profile;
    return $profile;
    }

    public function show($id)
    {
        $post = Post::find($id);

        return $post;
    }

    public function store(PostStoreRequest $request)
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
        $post = Post::find($id);

        $this->authorize('delete', $post);

        $post->delete();

        return 'post is deleted';

    }
}
