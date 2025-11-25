<?php
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
     $allPosts = Post::all();
    dd($allPosts);                  
});
