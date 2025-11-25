<?php
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
 $post = Post::find(4);

    echo '標題：' . $post->title . '<br>';
    echo '內容：' . $post->content . '<br>';
    echo '---------------------------' . '<br>';

    
    $comments = $post->comments()->get();

    foreach ($comments as $comment) {
        echo '留言：' . $comment->content . '<br>';
        echo '---------------------------' . '<br>';   
        }       
});

