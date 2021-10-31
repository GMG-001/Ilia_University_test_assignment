<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    public function posts()
    {
        $posts = Http::get('https://jsonplaceholder.typicode.com/posts')->json();
        $posts = collect($posts);
        $uniqueUserIds = $posts->unique('userId');
        $countUniquePosts = $posts->countBy('userId');

        return view('posts',compact('uniqueUserIds','countUniquePosts'));
    }

    public function userPosts(int $id)
    {
        $posts = Http::get('https://jsonplaceholder.typicode.com/posts')->json();
        $posts = collect($posts)->where('userId',$id);

        return view('userposts',compact('posts'));
    }

    public function post(int $id)
    {
        $post = Http::get('https://jsonplaceholder.typicode.com/posts/'.''.$id.'');
        return view('post',compact('post'));
    }
}
