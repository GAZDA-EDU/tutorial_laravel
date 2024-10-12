<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')->get();

        return view('test', compact('posts'));
    }

    public function show($id)
    {
        $posts = DB::table('posts')->where('id', $id)->first();
        return $posts;
    }

    public function store(Request $request)
    {
        DB::table('posts')->insert([
            'title'=>$request->title,
            'body'=>$request->body
        ]);
        $posts = DB::table('posts')->get();
        return $posts;
    }

    public function create()
    {
        return view('create');
    }

    public function edit($id)
    {
        $post = DB::table('posts')->where('id', $id)->first();

        return view('edit',compact('post'));
    }

    public function update($id, Request $request)
    {
        DB::table('posts')
        ->where('id', $id)
        ->update([
            'title' => $request->title,
            'body' => $request->body
        ]);
        return 'post is updated';
    }

    public function destroy($id)
    {
        DB::table('posts')
        ->where('id', $id)
        ->delete();

        return 'post is deleted';
    }
}
