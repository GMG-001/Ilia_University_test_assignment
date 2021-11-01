<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    public function posts():object
    {
         cache()->remember('posts', now()->addMinutes(5), function (){
            return Http::get('https://jsonplaceholder.typicode.com/posts')->json();
        });

        $posts = collect(cache('posts'));
        $uniqueUserIds = $posts->unique('userId');
        $countUniquePosts = $posts->countBy('userId');



        return view('posts',compact('uniqueUserIds','countUniquePosts'));
    }

    public function userPosts(int $id): object
    {
        cache()->remember('posts', now()->addMinutes(5), function (){
            return Http::get('https://jsonplaceholder.typicode.com/posts')->json();
        });

        $posts = collect(cache('posts'));
        $posts = collect($posts)->where('userId',$id);

        return view('userPosts',compact('posts'));
    }

    public function post(int $id): object
    {
        $post = Http::get('https://jsonplaceholder.typicode.com/posts/'.''.$id.'');

        return view('post',compact('post'));
    }
}
