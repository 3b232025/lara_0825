<?php
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
 $fourthPost = \App\Models\Post::find(4);
dd($fourthPost);             
});
