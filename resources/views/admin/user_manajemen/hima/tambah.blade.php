@extends('layouts.app');

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah User HIMA</h3>
                </div>
                <form action="{{url('/tambah_user_hima')}}" method="post" enctype="multipart/form-data" style="padding :0; margin:0;">
                    <div class="panel-body">
                        {{ csrf_field() }}
                        <div class="col-md-4">
                            <div class="form-group{{ $errors->has('kode_user') ? ' has-error' : '' }}">
                                <label for="kode_user">Kode User</label>
                                <input type="text" name="kode_user" class="form-control" placeholder="U-001">
                                @if ($errors->has('kode_user'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kode_user') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('npm') ? ' has-error' : '' }}">
                                <label for="kode_user">NPM</label>
                                <input type="text" name="npm" class="form-control" placeholder="Contoh : 1606114">
                                @if ($errors->has('npm'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('npm') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                                <label for="kode_user">Nama User</label>
                                <input type="text" name="nama" class="form-control" placeholder="Contoh : Edwin">
                                @if ($errors->has('nama'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('bagian') ? ' has-error' : '' }}">
                                <label for="kode_user">Bagian</label>
                                <select name="bagian" class="form-control">
                                    <option value="" disabled selected>Pilih Bagian</option>
                                    <option value="himatif">HIMATIF</option>
                                    <option value="himasip">HIMASIP</option>
                                    <option value="himti">HIMTI</option>
                                </select>
                                @if ($errors->has('bagian'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bagian') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="kode_user">Email</label>
                                <div class="input-group">
                                    <div class="input-group-addon">@</div>
                                    <input type="text" name="email" class="form-control" placeholder="user@sttgarut.ac.id">
                                </div>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                <label for="kode_user">Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Username">
                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="kode_user">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Minimal 6 Karakter">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4{{ $errors->has('foto') ? ' has-error' : '' }}" >
                            <label for="foto">Foto Profil</label>
                            <input type="file" class='form-control' name="foto" id="input_foto_user_hima">
                            @if ($errors->has('foto'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('foto') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="row">
                            <div class="pull-right" >
                                <input type="submit" class="btn btn-primary btn-sm" value="Simpan" style="margin:10px;">
                            </div>

                        </div>
                    </div>
                </form>
            </div>       
            
        </div>
    </div>

    <script>
        $(document).ready(function(){

            $(document).on('change', 'input#input_foto_user_hima', function(e){
                $.ajax({

                });
            });
        });
    </script>
@endsection