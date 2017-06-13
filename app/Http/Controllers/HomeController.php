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
        if(!auth('client')->check() && !auth('web')->check()){
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

            $post_terakhir = Post::orderBy('created_at', 'desc')->limit(5)->get();
            $organisasi = Organisasi::orderBy('created_at', 'desc')->limit(5)->get();
            return view('home', ['data'=>$data, 'post_terakhir'=>$post_terakhir, 'data_organisasi'=>$organisasi]);
        }else if(auth('client')->check()){
            $post_terakhir = Post::where('kategori', '=', auth('client')->user()->bagian)->orderBy('created_at', 'desc')->limit(5)->get();
            $user = auth('client')->user();
            return view('client.dasboard', ['post_terakhir'=>$post_terakhir, 'user'=>$user]);
        }



    }

    public function index_home()
    {

        if(!auth('client')->check() && !auth('web')->check()){
            $post_recent = Post::orderBy('created_at')->limit(3)->get();
            $orgnisasi_recent = Organisasi::orderBy('created_at')->limit(5)->get();
            $post = Post::limit('2')->get();
            return view('welcome', ['data_post'=>$post, 'recent_post'=>$post_recent, 'recent_organisasi'=>$orgnisasi_recent]);
        }else if(auth('client')->check()){
            $post_terakhir = Post::where('kategori', '=', auth('client')->user()->bagian)->orderBy('created_at', 'desc')->limit(5)->get();
            $user = auth('client')->user();
            return view('client.dasboard', ['post_terakhir'=>$post_terakhir, 'user'=>$user]);
        }
    }

    public function view_post($id)
    {
        $post = Post::find($id);
        $post_recent = Post::orderBy('created_at')->limit(3)->get();
        $orgnisasi_recent = Organisasi::orderBy('created_at')->limit(5)->get();
        return view('detail_post', ['post'=>$post, 'recent_post'=>$post_recent, 'recent_organisasi'=>$orgnisasi_recent]);
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
    
    public function index_tentang()
    {
        return view('tentang');
    }

    public function kontak()
    {
        return view('kontak');
    }

    
}
