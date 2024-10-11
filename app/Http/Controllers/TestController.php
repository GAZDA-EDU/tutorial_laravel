<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        $name = 'code with george';
        $isAdmin = false;

        return view('test', compact('name', 'isAdmin'));
    }
}
