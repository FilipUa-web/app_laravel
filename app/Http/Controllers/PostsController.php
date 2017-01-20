<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comments;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        $categories = Category::all();
        return view('main.posts.index', compact('posts','categories'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findorFail($id);
        $check = Auth::check();
        $categories = Category::all();
        return view('main.posts.post', compact('post','check','categories'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_category($id){
        $posts = Post::where('category_id' ,'=', $id)->get();
        $categories = Category::all();
        return view('main.posts.index', compact('posts','categories'));

    }
}

