<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;

Route::get('/home', function(){
    $posts = [];
    if(auth()->check()) {
        $posts = auth()->user()->usersCoolPost()->latest()->get();
    }
   return view('/home', ['posts'=>$posts]);
});

Route::get('/register',function (){
    return view('index');
});

Route::post('/register', [UserController::class, 'register']);

Route::get('/login', function (){
   return view('login');
});

Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);

Route::group(['middleware'=>'set.username.cookie'],function(){
   Route::get('/', [UserController::class,'home']);
});

Route::get('/create-post', function (){
    return view('/post');
});

Route::post('/create-post', [PostController::class, 'createPost']);

Route::get('/edit-posts/{post}', [PostController::class, 'showEditScreen']);
Route::put('/edit-posts/{post}', [PostController::class, 'actuallyUpdatePost']);
Route::delete('delete-posts/{post}', [PostController::class, 'deletePost']);
