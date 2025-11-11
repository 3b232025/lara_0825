<?php
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $post = Post::find(1);

    echo "ID: {$post->id}<br>";
    echo "標題: {$post->title}<br>";
    echo "內容: {$post->content}<br>";
    echo "建立時間: {$post->created_at}<br>";

    dd($post);
});
