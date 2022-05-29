<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Author;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {

        $posts = Post::find(1);
        $authors = Author::all();
        // $authors->posts;
        // dd($authors, $posts);
        // $testposts = Author::find(1);
        

        // $posts->post->title;
        // $posts->author->title;

        return Inertia::render('HomeC', [
            // 'posts' => $posts,
            'authors' => $authors,

        ]);


        
    }

    public function test()
    {
        // $author = Post::all();
        
        $posts = Post::with('author')->get();
    //    $posts->first()->author; //or find(n) method


        return view('test', [
            
            'posts' => $posts,
    ]); 
    }

}
