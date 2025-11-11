<?php
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $post = Post::find(1);
    $post->title   = 'saved title';
    $post->content = 'saved content';
    $post->save();                   
});
