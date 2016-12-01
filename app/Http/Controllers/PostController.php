<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


class PostController extends Controller
{
    
    public function store(Request $request){
       if($request->ajax()){
           $data = $request->all();
        $post=  \App\Post::create([
               'description'=>$data['post'],
               'user_id'=>\Auth::user()->id
               ]);
               
        return response()->json([
            'object'=> $post
            ]);
          
       }
    }
    
    //
}
