@extends('layouts.app');

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Organisasi</h3>
                </div>
                <form action="{{url('/admin/organisasi/simpan')}}" method="post" enctype="multipart/form-data" style="padding :0; margin:0;">
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
                            <div class="form-group{{ $errors->has('jenis_organisasi') ? ' has-error' : '' }}">
                                <label for="jenis_organisasi">Jenis Organisasi</label>                                
                                <select name="jenis_organisasi" class="form-control" >
                                    <option value="" disadbled selected>Pilih Jenis Organisasi</option>
                                    <option value="ukm">UKM</option>
                                    <option value="hima">HIMA</option>
                                </select>
                                @if ($errors->has('jenis_organisasi'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jenis_organisasi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            
                            
                            <div class="form-group{{ $errors->has('nama_pimpinan') ? ' has-error' : '' }}">
                                <label for="nama_pimpinan">Nama Pimpinan</label>
                                <input type="text" name="nama_pimpinan" class="form-control" placeholder="Masukan Nama Pimpinan">
                                @if ($errors->has('nama_pimpinan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama_pimpinan') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('deskripsi') ? ' has-error' : '' }}">
                                <label for="deskripsi">Keterangan</label>
                                <textarea name="deskripsi" class="form-control" rows="4"></textarea>
                                @if ($errors->has('deskripsi'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('deskripsi') }}</strong>
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