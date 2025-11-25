<?php
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Models\Comment;

Route::get('/', function () {
 $comment = Comment::find(4);

    echo $comment->content . '<br>';
    echo '***********************<br>';

   
    $post = $comment->post()->first();

    echo $post->id . '<br>';
    echo $post->title . '<br>';
    echo $post->content . '<br>';
});

