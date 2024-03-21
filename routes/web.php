<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::view('/', 'welcome');

Route::get('/home/{id}', fn($id) => [
    'id' => $id
])->where('id', '[0-9]+');

Route::fallback(fn () => [
    'code' => '404',
    'reason' => 'not defined therefor not found'
]);

//Route::redirect('/', '/home/2');
Route::permanentRedirect('/', '/home/2');

$posts = ['post 0', 'post 1', 'post 2'];

Route::get('/posts', fn () => $posts);
Route::get('/posts/create', fn () => 'create post form');
Route::get('/posts/{post}', fn ($post) => "Show $post");


