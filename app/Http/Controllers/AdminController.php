<?php

namespace App\Http\Controllers;

use App\UserManajemen;
use Illuminate\Http\Request;
use App\Organisasi;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index_user_hima()
    {   
        $user_hima = UserManajemen::where('tipe', '=', 'hima')->paginate('5');
        return view('admin.user_manajemen.hima.index', ['data_user'=>$user_hima]);
    }

    public function form_tambah_user_hima()
    {
        return view('admin.user_manajemen.hima.tambah');
    }

    public function form_update_user_hima($id){
        $user = UserManajemen::find($id);
        return view('admin.user_manajemen.hima.update', ['user'=>$user]);
    }

    public function simpan_perubahan_user_hima(Request $request)
    {
        $this->validate($request, [
            'kode_user' => 'required|max:255',
            'npm' => 'required',
            'nama' => 'required',
            'bagian' => 'required',
            'email' => 'required',
            'username' => 'required'
        ]);

        $user = UserManajemen::find($request->input('id'));
        $user->kode_user = $request->input('kode_user');
        $user->npm = $request->input('npm');
        $user->nama = $request->input('nama');
        $user->bagian = $request->input('bagian');
        $user->email = $request->input('email');
        $user->username = $request->input('username');
        $user->tipe = 'hima';
        if($request->input('password') != ''){
            $user->password = bcrypt($request->input('password'));
        }
        
        if ($request->file('foto') != null) {
            $destinationPath = 'img'; // upload path
            $extension = $request->file('foto')->getClientOriginalExtension(); // getting image extension
            $fileName = rand(11111,99999).'.'.$extension; // renameing image
            $request->file('foto')->move($destinationPath, $fileName); // uploading file to given path
            $user->foto = $fileName;
        }
        // if ($request->hasFile('foto')) {
        //     $file = $request->file('foto');
        //     $file = $request->foto;
        //     $nama_file = $file->getClientOriginalName();
        //     $path_d = url('img');
        //     $path = $request->photo->move($path_d, $nama_file);

        //     $user->foto = $path;
        // }

        if($user->save())
        {
            $request->session()->flash('sukses', 'Berhasil Menyimpan Data!');
            return redirect('/index_user_hima');
        }
    }

    public function simpan_user_hima(Request $request)
    {
        $this->validate($request, [
            'kode_user' => 'required|max:255',
            'npm' => 'required',
            'nama' => 'required',
            'bagian' => 'required',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required',
            'foto' => 'required'
        ]);

        $id = $request->input('id');

        if($id == ""){
            $user = new UserManajemen();
            $user->kode_user = $request->input('kode_user');
            $user->npm = $request->input('npm');
            $user->nama = $request->input('nama');
            $user->bagian = $request->input('bagian');
            $user->email = $request->input('email');
            $user->username = $request->input('username');
            $user->tipe = 'hima';
            $user->password = bcrypt($request->input('password'));
            if ($request->file('foto')->isValid()) {
                $destinationPath = 'img'; // upload path
                $extension = $request->file('foto')->getClientOriginalExtension(); // getting image extension
                $fileName = rand(11111,99999).'.'.$extension; // renameing image
                $request->file('foto')->move($destinationPath, $fileName); // uploading file to given path
                $user->foto = $fileName;
            }
            // if ($request->hasFile('foto')) {
            //     $file = $request->file('foto');
            //     $file = $request->foto;
            //     $nama_file = $file->getClientOriginalName();
            //     $path_d = url('img');
            //     $path = $request->photo->move($path_d, $nama_file);

            //     $user->foto = $path;
            // }

            if($user->save())
            {
                $request->session()->flash('sukses', 'Berhasil Menyimpan Data!');
                return redirect('/index_user_hima');
            }
            
        }else{
            
        }
    }

    public function hapus_user_hima(Request $request)
    {   
        $user = UserManajemen::find($request->input('id'));

        if($user->delete())
        {
            $request->session()->flash('sukses', 'Berhasil Menghapus Data!');
            return json_encode('sukses');
        }
    }
    public function index_user_ukm()
    {
        $user_ukm = UserManajemen::where('tipe', '=', 'ukm')->paginate('5');
        return view('admin.user_manajemen.ukm.index', ['data_user'=>$user_ukm]);
    }
    public function form_tambah_user_ukm()
    {
        return view('admin.user_manajemen.ukm.tambah');
    }

    public function form_update_user_ukm($id){
        $user = UserManajemen::find($id);
        return view('admin.user_manajemen.ukm.update', ['user'=>$user]);
    }

    public function simpan_perubahan_user_ukm(Request $request)
    {
        $this->validate($request, [
            'kode_user' => 'required|max:255',
            'npm' => 'required',
            'nama' => 'required',
            'bagian' => 'required',
            'email' => 'required',
            'username' => 'required'
        ]);

        $user = UserManajemen::find($request->input('id'));
        $user->kode_user = $request->input('kode_user');
        $user->npm = $request->input('npm');
        $user->nama = $request->input('nama');
        $user->bagian = $request->input('bagian');
        $user->email = $request->input('email');
        $user->username = $request->input('username');
        $user->tipe = 'ukm';
        if($request->input('password') != ''){
            $user->password = bcrypt($request->input('password'));
        }
        
        if ($request->file('foto') != null) {
            $destinationPath = 'img'; // upload path
            $extension = $request->file('foto')->getClientOriginalExtension(); // getting image extension
            $fileName = rand(11111,99999).'.'.$extension; // renameing image
            $request->file('foto')->move($destinationPath, $fileName); // uploading file to given path
            $user->foto = $fileName;
        }
        // if ($request->hasFile('foto')) {
        //     $file = $request->file('foto');
        //     $file = $request->foto;
        //     $nama_file = $file->getClientOriginalName();
        //     $path_d = url('img');
        //     $path = $request->photo->move($path_d, $nama_file);

        //     $user->foto = $path;
        // }

        if($user->save())
        {
            $request->session()->flash('sukses', 'Berhasil Menyimpan Data!');
            return redirect('/index_user_ukm');
        }
    }

    public function simpan_user_ukm(Request $request)
    {
        $this->validate($request, [
            'kode_user' => 'required|max:255',
            'npm' => 'required',
            'nama' => 'required',
            'bagian' => 'required',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required',
            'foto' => 'required'
        ]);

        $id = $request->input('id');

        if($id == ""){
            $user = new UserManajemen();
            $user->kode_user = $request->input('kode_user');
            $user->npm = $request->input('npm');
            $user->nama = $request->input('nama');
            $user->bagian = $request->input('bagian');
            $user->email = $request->input('email');
            $user->username = $request->input('username');
            $user->tipe = 'ukm';
            $user->password = bcrypt($request->input('password'));
            if ($request->file('foto')->isValid()) {
                $destinationPath = 'img'; // upload path
                $extension = $request->file('foto')->getClientOriginalExtension(); // getting image extension
                $fileName = rand(11111,99999).'.'.$extension; // renameing image
                $request->file('foto')->move($destinationPath, $fileName); // uploading file to given path
                $user->foto = $fileName;
            }
            // if ($request->hasFile('foto')) {
            //     $file = $request->file('foto');
            //     $file = $request->foto;
            //     $nama_file = $file->getClientOriginalName();
            //     $path_d = url('img');
            //     $path = $request->photo->move($path_d, $nama_file);

            //     $user->foto = $path;
            // }

            if($user->save())
            {
                $request->session()->flash('sukses', 'Berhasil Menyimpan Data!');
                return redirect('/index_user_ukm');
            }
            
        }else{
            
        }
    }

    public function hapus_user_ukm(Request $request)
    {   
        $user = UserManajemen::find($request->input('id'));

        if($user->delete())
        {
            $request->session()->flash('sukses', 'Berhasil Menghapus Data!');
            return json_encode('sukses');
        }
    }

    public function index_organisasi()
    {
        $organisasi = new Organisasi();
        $organisasi = $organisasi->paginate('6');

        return view('admin.organisasi.index', [
            'data_organisasi'=>$organisasi
        ]);
    }

    public function tambah_organisasi()
    {
        return view('admin.organisasi.tambah');
    }

    public function simpan_organisasi(Request $request)
    {
        $this->validate($request, [
            'nama'=>'required',
            'tahun_berdiri'=>'required',
            'jenis_organisasi'=>'required',
            'nama_pimpinan'=>'required',
            'deskripsi'=>'required',
            'foto'=>'required'
        ]);

        $organisasi = new Organisasi();
        $organisasi->nama = $request->input('nama');
        $organisasi->tahun_berdiri = $request->input('tahun_berdiri');
        $organisasi->jenis_organisasi = $request->input('jenis_organisasi');
        $organisasi->nama_pimpinan = $request->input('nama_pimpinan');
        $organisasi->deskripsi = $request->input('deskripsi');

        if ($request->file('foto') != null) {
            $destinationPath = 'img'; // upload path
            $extension = $request->file('foto')->getClientOriginalExtension(); // getting image extension
            $fileName = rand(11111,99999).'.'.$extension; // renameing image
            $request->file('foto')->move($destinationPath, $fileName); // uploading file to given path
            $organisasi->logo = $fileName;
        }

        if($organisasi->save())
        {
            
            return redirect('/index_organisasi');
        }
    }
}
