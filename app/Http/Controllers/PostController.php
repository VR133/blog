<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    public function show(Post $post){
        
        //? Stiu de Actions Handled By Resource Controller, dar sincer nu vedeam alta solutie aici
        //? apropo, se poate de facunt un mic update in show
        
        Post::find($post->id)->increment('views', 1); 
        return view('post', compact('post'));
    }
}
