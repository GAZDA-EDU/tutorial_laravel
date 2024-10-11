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
        return $request->title;
    }

    public function create()
    {
        return view('create');
    }
}
