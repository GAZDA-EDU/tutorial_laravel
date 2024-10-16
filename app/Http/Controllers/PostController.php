<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Requests\Storerequest;
// use App\Models\Address;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function code_with_george(Storerequest $request)
    {
        //user has many post

        //posts has many comments

        $users=User::has('posts')->get();

        $users=User::has('posts')->has('comments')->get();

        $users=User::has('posts', '>', '5')->get();

        $users=User::has('posts')->orHas('comments')->get();

        $user=User::doesntHave('posts')->get();

        $user=User::has('posts.comments')->get();

        $user=User::has('posts.comments', '>', '5')->get();

        $users=User::whereHas('posts', function($query){
            return $query->where('is_active', 1);
        })->get();

        $users=User::whereHas('posts', function($query){
            return $query->where('is_active', 1);
        })->whereHas('comments', function($query){
            return $query->where('is_active', 1);
        })->get();

        $users=User::whereHas('posts', function($query){
            return $query->where('is_active', 1);
        })->orWhereHas('comments', function($query){
            return $query->where('is_active', 1);
        })->get();
    }
}
