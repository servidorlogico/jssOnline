<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = \App\Post::orderBy('created_at','DSC')->get();
        foreach($posts as $post){
            $post->userpost;
        }
        //dd($posts);
        return view('home')->with('posts',$posts);
    }
}
