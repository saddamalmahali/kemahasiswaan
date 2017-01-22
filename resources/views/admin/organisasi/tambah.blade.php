@extends('layouts.app');

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Organisasi</h3>
                </div>
                <form action="{{url('/tambah_organisasi')}}" method="post" enctype="multipart/form-data" style="padding :0; margin:0;">
                    <div class="panel-body">
                        {{ csrf_field() }}
                        <div class="col-md-4">
                            <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                                <label for="nama">Nama Organisasi</label>
                                <input type="text" name="nama" class="form-control" placeholder="HIMATIF">
                                @if ($errors->has('nama'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('tahun_berdiri') ? ' has-error' : '' }}">
                                <label for="tahun_berdiri">Tahun Berdiri</label>
                                <input type="number" name="tahun_berdiri" class="form-control" placeholder="Masukan Tahun Berdiri Organisasi">
                                @if ($errors->has('tahun_berdiri'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tahun_berdiri') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                        </div>
                        <div class="col-md-4">
                            
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="jenis_organisasi">Jenis Organisasi</label>                                
                                <select name="jenis_organisasi" class="form-control" >
                                    <option value="" disadbled selected>Pilih Jenis Organisasi</option>
                                </select>
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