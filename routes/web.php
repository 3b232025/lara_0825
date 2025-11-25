<?php
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
$lastPost = \App\Models\Post::orderBy('id', 'DESC')->first();
dd($lastPost);            
});
