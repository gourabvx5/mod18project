<?php

use App\Http\Controllers\Post;
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

Route::get('/home', function () {
    return ('Home');
});

Route::get('/posts',[Post::class,'index']);

Route::get('/categories/{id}/latest-post', [Category::class, 'latestPost'])->name('categories.latest-post');

Route::get('/categories/{id}/posts', [Post::class, 'getPostsByCategory'])->name('posts.category');

Route::delete('/posts/{id}/delete', [Post::class, 'destroy'])->name('posts.delete');