<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Organisasi;
use App\UserManajemen;
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
        $user_hima = UserManajemen::where('tipe', '=', 'hima')->count();
        $user_ukm = UserManajemen::where('tipe', '=', 'ukm')->count();
        $total_organisasi = Organisasi::count();
        $total_kegiatan = Post::count();
        $data = [
            'total_ukm'=>$user_ukm,
            'total_hima'=>$user_hima,
            'total_organisasi'=>$total_organisasi,
            'total_kegiatan'=>$total_kegiatan
        ];
        $kegiatan_hima = "";

        $postingan_himatif = Post::where('kategori', '=', 'himatif')->count();
        $postingan_himasip = Post::where('kategori', '=', 'himasip')->count();
        $postingan_himti = Post::where('kategori', '=', 'himti')->count();
        $data_chart_hima = [
            
            'postingan_himatif'=>$postingan_himatif,
            'postingan_himasip'=>$postingan_himasip,
            'postingan_himti'=>$postingan_himti,
        ];
        
        $post_terakhir = Post::orderBy('created_at', 'desc')->limit(5);
        return view('home', ['data'=>$data, 'post_terakhir'=>$post_terakhir]);
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
