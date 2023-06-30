<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Catergory;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    //  dd($posts);
    return view('posts',[
        'posts' => Post::latest()->with('catergory','author')->get(),

        "catergories" => Catergory::all(),
    ]);
})->name('home');

    // Route Model Binding
    // you have to set slug here if we don't it will find with id
    // this code basically do this
    // Post::where('slug', $post)->first()
Route::get('/posts/{post:slug}', function(Post $post){


    return view('post',[
        "post" => $post,
        "catergories" => Catergory::all(),
    ]);
});

// route for catergory
Route::get('/categories/{catergory:slug}', function(Catergory $catergory){
        return view('posts',[
            'posts' => $catergory->posts,
            "currentCatergory" =>  $catergory,
            "catergories" => Catergory::all(),
        ]);
})->name('category');

Route::get('/authors/{author:username}', function (User $author){
    return view('posts', [
        "posts" => $author->posts,
        "catergories" => Catergory::all(),
    ]);
});
