<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Catergory;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use App\Http\Controllers\RegisterController;

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

Route::get('/',[PostController::class,'index'])->name('home');

    // Route Model Binding
    // you have to set slug here if we don't it will find with id
    // this code basically do this
    // Post::where('slug', $post)->first()
Route::get('/posts/{post:slug}',[PostController::class,'show']);

// route for catergory
// Route::get('/categories/{catergory:slug}', function(Catergory $catergory){
//         return view('posts',[
//             'posts' => $catergory->posts,
//             "currentCatergory" =>  $catergory,
//             "catergories" => Catergory::all(),
//         ]);
// })->name('category');

// Route::get('/authors/{author:username}', function (User $author){
//     return view('posts.index', [
//         "posts" => $author->posts,
//     ]);
// });

//register page
Route::get('register', [RegisterController::class,'create'])->middleware('guest')->name("createPage");

//create account
Route::post('register', [RegisterController::class,'store'])->middleware('guest')->name('registerUser');

//login page
Route::get('login', [LoginController::class,'show'])->middleware('guest')->name('loginPage');

//login
Route::post('login',[LoginController::class,'login'])->middleware('guest')->name('loginUser');

//logout
Route::post('logout', [LoginController::class,'logout'])->middleware("auth")->name("logout");

