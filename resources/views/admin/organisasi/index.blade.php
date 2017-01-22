@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Halaman Organisasi</h3>
                </div>
                <div class="panel-body">
                    <div class="pull-right">
                        <a href="{{url('/admin/organisasi/tambah')}}" class="btn btn-primary btn-sm" style="margin:10px;"><i class="fa fa-plus"></i>&nbsp;Tambah Data</a>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <td style="width:10%; text-align:center;">No</td>
                                            <td style="text-align:center;">Nama Organisasi</td>
                                            <td style="text-align:center;">Tahun Berdiri</td>
                                            <td style="text-align:center;">Nama Pimpinan</td>
                                            <td style="text-align:center;">Opsi</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 0; ?>
                                        @forelse ($data_organisasi as $organisasi)
                                            <tr>
                                                <td>{{$i+1}}</td>
                                                <td>{{$organisasi->nama}}</td>
                                                <td>{{$organisasi->tahun_berdiri}}</td>
                                                <td>{{$organisasi->nama_pimpinan}}</td>
                                                <td></td>
                                            </tr>    
                                            <?php $i++; ?>
                                        @empty
                                            <tr>
                                                <td colspan="5" align="center">Tidak Ada Data</td>
                                            </tr>
                                        @endforelse
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection