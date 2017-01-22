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
                                    <td style="width:10%; text-align:center;">No</td>
                                    <td style="width:40%; text-align:center;">Judul</td>
                                    <td style="text-align:center;">Tanggal</td>
                                    <td style="text-align:center;">Status</td>
                                    <td style="width:10%; text-align:center;">Opsi</td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection