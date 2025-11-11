<?php
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $post = Post::create([
        'title'      => 'test title',
        'content'    => 'test content',
        'is_feature' => true,
    ]);
    return $post;            
});
