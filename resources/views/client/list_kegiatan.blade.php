@extends('layouts.client')
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">List Kegiatan : <span class="label label-danger">{{Auth::guard('client')->user()->bagian}}</span> </h3>
                </div>
                <div class="panel-body">
                    <center><h3>Data Kegiatan Kemahasiswaan <p><small>Sekolah Tinggi Teknologi Garut</small></p></h3></center>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:10%; text-align:center;">No</th>
                                    <th style="width:40%; text-align:center;">Judul</th>
                                    <th style="text-align:center;">Tanggal</th>
                                    <th style="text-align:center;">Status</th>
                                    <th style="width:10%; text-align:center;">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 0; ?>
                                @forelse ($data_kegiatan as $kegiatan)
                                    <tr>
                                        <td align="center">{{$i+1}}</td>
                                        <td>{{$kegiatan->title}}</td>
                                        <td align="center">{{date('d-m-Y', strtotime($kegiatan->created_at))}}</td>
                                        <td align="center">{!!$kegiatan->active ==1 ? '<span class="label label-primary">Publish</span>' : '<span class="label label-danger">Not Publish</span>'!!}</td>
                                        <td align="center">
                                            <a href="{{url('/client/edit_kegiatan').'/'.$kegiatan->id}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                            <a class="btn btn-danger btn-xs btn-hapus-kegiatan" id="{{$kegiatan->id}}"><i class="fa fa-trash"></i></a>
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

                        <div style="text-align:center;">{{$data_kegiatan->links()}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).ready(function(){
            $(document).on('click', '.btn-hapus-kegiatan', function(e){
                e.preventDefault();
                if(confirm('Apakah Yakin Akan menghapus Data?')){
                    var id = $(this).attr('id');
                    $.ajax({
                        url : '/client/hapus_kegiatan',
                        type : 'post',
                        data : {id : id},
                        dataType : 'json',
                        success : function(data){
                            if(data == 'sukses'){
                                document.location.reload(false);
                            }
                        }
                    });

                }
            });
        }); 
    </script>
@endsection