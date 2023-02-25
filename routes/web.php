<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "tittle" => "Home",
        "active" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "tittle" => "About",
        "active" => 'about',
        "name" => "Tommy Ferdian Hadimarta",
        "email" => "tricktommy4@gmail.com",
        "image" => "tommy.jpg"
    ]);
});

// Route::get('/blog', function () {

//     return view('posts',[
//         "tittle" => "Posts",
//         "posts" => Post::all()
//     ]);
// });
Route::get('/posts', [PostController::class, 'index']);

//halaman singel post

// Route::get('posts/{slug}', function($slug) {


// $new_post = [];

// foreach($blog_posts as $post) {
//     if($post["slug"] === $slug) {
//         $new_post = $post;
//     }
// }

//     return view('post',[
//         "tittle" => "Single Post",
//         "post" => Post::Find($slug)
//     ]);
// });

Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'tittle' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

//tidak kepakai di pindah ke model post

// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('posts', [
//         'tittle' => "Post By Category : $category->name",
//         'active' => 'categories',

//         //eager laze load for performance
//         'posts' => $category->posts->load('category', 'author')
//     ]);
// });

// Route::get('/authors/{author:username}', function (User $author) {
//     return view('posts', [
//         'tittle' => "Post By Author : $author->name ",
//         'active' => 'categories',
//         'posts' => $author->posts->load('category', 'author')

//     ]);
// });
