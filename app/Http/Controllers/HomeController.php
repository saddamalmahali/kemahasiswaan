<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function index_home()
    {
        $post = Post::limit('2')->get();
        return view('welcome', ['data_post'=>$post]);
    }

    public function view_post($id)
    {
        $post = Post::find($id);
        return view('detail_post', ['post'=>$post]);
    }
    

    
}
