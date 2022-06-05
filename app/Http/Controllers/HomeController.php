<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Inertia\Inertia;
use App\Models\Author;
use Illuminate\Http\Request;
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

    // public function search($request, $response){
    //     $config = config('session');
    //     $response->headers->setCookie(new Cookie('XSRF-TOKEN'));


    //     return $response;

    // }
    public function search()
    {
        return view('search');
          
    } 
    
    public function getFormRequest(Request $request)
    {
       return $request->input();
          
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
