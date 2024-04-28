<?php

use Illuminate\Support\Facades\Route;
use Spatie\Sheets\Facades\Sheets;
use Spatie\Sheets\Sheet;

Route::get('/', function () {
    $posts = Sheets::collection('posts')->all();
    return view('app', [
        'posts'=>$posts
    ]);
});

Route::get("/posts/{post}", function($post) {
    $posts = Sheets::collection('posts')->all()->where('slug', $post)->first();
    return view('posts.show', [
        'post' => $posts
    ]);
});
