<?php
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $posts = Post::where('id','<','10')->orderBy('id','DESC')->get();
    
    foreach ($posts as $post) {
        echo "ID: {$post->id} | 標題: {$post->title}<br>";
    }

    dd($posts);
});
