<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Catergory;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::latest();
        // if(request('search')) {
        //     $posts
        //     ->where('title', 'like', '%' .request('search') .'%')
        //     ->orWhere('body', 'like', '%' .request('search') .'%');
        // }
    //  dd($posts);
    return view('posts.index',[
        'posts' => $posts->filter(request(['search','catergory','author']))->paginate(6)->withQueryString(),


    ]);
    }

    public function show(Post $post){
        return view('posts.show',[
            "post" => $post,

        ]);
    }
}
