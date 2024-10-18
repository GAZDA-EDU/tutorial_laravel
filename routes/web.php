<?php

use App\Http\Controllers\AuthControlller;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', function () {
    return 'hello from the api route';
});

Route::get('index', [TestController::class, 'index']);

Route::get('show/{id?}', [TestController::class, 'show']);

Route::post('posts', [TestController::class, 'store']);

Route::get('posts/create', [TestController::class, 'create']);

Route::get('edit_post/{id}', [TestController::class, 'edit']);

Route::post('update_post/{id}', [TestController::class, 'update']);

Route::get('delete_post/{id}', [TestController::class, 'destroy']);

Route::post('login', [AuthControlller::class, 'login']);
Route::post('register', [AuthControlller::class, 'register']);

Route::get('login_form', [AuthControlller::class, 'login_form']);
Route::get('register_form', [AuthControlller::class, 'register_form']);
