@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h3 class="panel-title">Data User HIMA</h3>
                </div>
                <div class="panel-body">
                    @if(Session::has('sukses'))
                        <div class="alert alert-info alert-dismissable">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Sukses!</strong> {!! Session::get('sukses') !!}
                        </div>
                    @endif
                    
                    <div class="pull-right">
                        <a href="{{url('/tambah_user_hima')}}" class="btn btn-primary btn-sm" style="margin:10px;"><i class="fa fa-plus"></i>&nbsp;Tambah User</a>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="text-align:center; width:10%;">No</th>
                                <th style="text-align:center;">Nama</th>
                                <th style="text-align:center;">Bagian HIMA</th>
                                <th style="text-align:center;">Email</th>
                                <th style="text-align:center; width:20%;">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0; ?>
                            @forelse ($data_user as $user)
                                <tr>
                                    <td align="center">{{$i+1}}</td>
                                    <td align="center">{{$user->nama}}</td>
                                    <td align="center">{{$user->bagian}}</td>
                                    <td align="center">{{$user->email}}</td>
                                    <td align="center">
                                        <a href="{{url('/update_user_hima').'/'.$user->id}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                        <a class="btn btn-danger btn-xs btn-hapus-user" id="{{$user->id}}"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            @empty
                                <tr>
                                    <td colspan="5" align="center">Tidak Ada Data</td>
                                </tr>
                            @endforelse
                        </tbody>    
                    </table>
                    <div align="center">{{$data_user->links()}}</div>
                </div>
            </div>
        </div>
    </div>    
    <script>
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(document).on('click', '.btn-hapus-user', function(e){
                e.preventDefault();
                if(confirm('Apakah yakin akan menghapus data?')){
                    var id_user = $(this).attr('id');

                    $.ajax({
                        url : '/hapus_user_hima',
                        type : 'post',
                        data : {id : id_user },
                        dataType : 'json',
                        success : function(data){
                            if(data == 'sukses'){
                                document.location.reload(false);
                            }
                        }
                    }); 
                }
                console.log('Tombol hapus di klik...');
            });
        });
    </script>
@endsection
