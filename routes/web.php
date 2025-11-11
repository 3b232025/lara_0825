<?php
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $post = new Post();            
    $post->title = 'test title';   
    $post->content = 'test content';
    $post->save();                 
    return $post;                  
});
