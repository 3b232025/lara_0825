<?php
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $featuredPosts = \App\Models\Post::where('is_feature', 1)->get();
dd($featuredPosts);              
});
