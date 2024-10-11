<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')->where('body','=','egerg')->get();
        return $posts;
    }
}
