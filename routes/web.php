<?php
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $post = Post::destroy(3, 5 ,7);                  
});
