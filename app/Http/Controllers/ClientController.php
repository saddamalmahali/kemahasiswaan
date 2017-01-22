<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Post;
class ClientController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/client/index';
	protected $guard = 'client';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function login_client(Request $request){
        $this->validateLogin($request);
        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLoginClient($request)) {
            $request->session()->regenerate();

            $this->clearLoginAttempts($request);

            return redirect()->intended('/client/index');
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }

    protected function attemptLoginClient(Request $request)
    {
        return auth()->guard('client')->attempt(
            $this->credentials($request), $request->has('remember')
        );
    }

    public function masuk_hima()
    {
        if(auth('client')->check()){
            return redirect('/client/index');    
        }
        return view('login-hima');
    }


    public function index_client()
    {
        return view('client.dasboard');
    }
    public function posting_kegiatan()
    {
        return view('client.posting_kegiatan');
    }
    public function tambah_kegiatan(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
            'file_header'=>'required',
            'status'=>'required'
        ]);

        $post = new Post();
        $post->author_id = auth('client')->user()->id;
        $post->title = $request->input('title');
        $post->kategori = $request->input('kategori');
        $post->active = $request->input('active');
        $post->body = $request->input('note');
        if ($request->file('file_header') != null) {
            $destinationPath = 'img'; // upload path
            $extension = $request->file('file_header')->getClientOriginalExtension(); // getting image extension
            $fileName = rand(11111,99999).'.'.$extension; // renameing image
            $request->file('file_header')->move($destinationPath, $fileName); // uploading file to given path
            $post->gambar_header = $fileName;
        }
       
        $post->active = $request->input('status');

        if($post->save()){
            $request->session()->flash('sukses', 'Berhasil Menyimpan Data!');
            return redirect('/client/index');
        }
    }

    public function list_kegiatan()
    {
        $post = Post::where('kategori', '=', auth('client')->user()->bagian);
        $post = $post->paginate('6');
        return view('client.list_kegiatan', ['data_kegiatan'=>$post]);
    }

    public function edit_kegiatan($id)
    {
        $post = Post::find($id);

        return view('client.edit_kegiatan', ['post'=>$post]);
    }

    public function simpan_kegiatan(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
            'status'=>'required'
        ]);

        $post = Post::find($request->input('id'));
        $post->author_id = auth('client')->user()->id;
        $post->title = $request->input('title');
        $post->kategori = $request->input('kategori');
        $post->active = $request->input('active');
        $post->body = $request->input('note');

        if ($request->file('file_header') != null) {
            $destinationPath = 'img'; // upload path
            $extension = $request->file('file_header')->getClientOriginalExtension(); // getting image extension
            $fileName = rand(11111,99999).'.'.$extension; // renameing image
            $request->file('file_header')->move($destinationPath, $fileName); // uploading file to given path
            $post->gambar_header = $fileName;
        }
       
        $post->active = $request->input('status');

        if($post->save()){
            $request->session()->flash('sukses', 'Berhasil Menyimpan Data!');
            return redirect('/list_kegiatan');
        }
    }

    public function hapus_kegiatan(Request $request)
    {
        $kegiatan = Post::find($request->input('id'));
        if($kegiatan->delete()){
            return json_encode('sukses');
        }
    }
}
