<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Author;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {

        $posts = Post::find(1);

        $posts->post->title;
        // $posts->author->title;

        return Inertia::render('HomeC', [
            'title' => $posts,
            'description' => 'description',

        ]);


        
    }

}
