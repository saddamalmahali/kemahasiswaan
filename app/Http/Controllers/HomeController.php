<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Organisasi;
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

    public function index_publikasi()
    {
        $post = new Post();
        $post = $post->paginate('6');
        return view('publikasi', ['data_post'=>$post]);
    }

    public function organisasi_kemahasiswaan()
    {
        $organisasi = new Organisasi();
        $organisasi = $organisasi->paginate('9');
        return view('organisasi_kemahasiswaan', ['data_organisasi'=>$organisasi]);
    }
    
    

    
}
