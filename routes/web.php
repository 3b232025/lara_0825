<?php
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $post = Post::find(1);          
    $post->update([
        'title'   => 'updated title',
        'content' => 'updated content',
    ]);        
});
