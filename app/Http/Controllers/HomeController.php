<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tags;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $posts = Post::paginate(3);
        $tags = Tags::all();
        $categories = Category::all();
        return view('home', compact('posts', 'tags', 'categories'));
    }
    public function show($filter, $id){

        $tags = Tags::all();
        
        $categories = Category::all();

        if($filter == 'tag'){
            $tag = Tags::findorFail($id);
            $posts = $tag->posts()->paginate(1);
            $filter = 'Tag';
            $filter_value = $tag->tag;
        } else {
            $category = Category::findorFail($id);
            $posts = $category->posts()->paginate(1);
            $filter = 'Category';
            $filter_value = $category->category;
        }
        return view('home', compact('posts', 'tags', 'categories', 'filter', 'filter_value'));
    }
}
