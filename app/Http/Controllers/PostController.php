<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index()
    {

        // slekesi tittle
        $tittle= '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $tittle = 'in' . $category;
        }
        if(request('author')){
            $author = User::firstWhere('slug', request('author'));
            $tittle = 'by' . $author;
        }


        //
        return view('posts',[
            "tittle" => "All Post" . $tittle,
            "active"=> "posts",
            // "posts" => Post::all()
            "posts" => Post::latest()->filter(request(['search','category','author']))->get()
        ]);
    }

    public function show(Post $post)
    {

        return view('post',[
            "tittle" => "Single Post",
            "active"=> "posts",
            "post" => $post
        ]);
    }
}
