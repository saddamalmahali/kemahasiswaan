@extends('layouts.app')

@section('content')
<style>
    canvas {
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
        
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="panel">
                <div class="panel-body">
                    <h3>Jumlah User HIMA</h3>
                    <div class="row">
                        <div class="col-md-4">
                            <h3>{{$data['total_hima']}} <small>Orang</small></h3>
                        </div>
                        <div class="col-md-8">
                            <div class="pull-right" style="padding:0; margin:0;width : 50px; heigth : 50px;">
                                <h1><i class="fa fa-user"></i></h1>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel">
                <div class="panel-body">
                    <h3>Jumlah User UKM</h3>
                    <div class="row">
                        <div class="col-md-4">
                            <h3>{{$data['total_ukm']}} <small>Orang</small></h3>
                        </div>
                        <div class="col-md-8">
                            <div class="pull-right" style="padding:0; margin:0;width : 50px; heigth : 50px;">
                                <h1><i class="fa fa-address-book"></i></h1>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel">
                <div class="panel-body">
                    <h3>Organisasi</h3>
                    <div class="row">
                        <div class="col-md-4">
                            <h3>{{$data['total_organisasi']}}</h3>
                        </div>
                        <div class="col-md-8">
                            <div class="pull-right" style="padding:0; margin:0;width : 50px; heigth : 50px;">
                                <h1><i class="fa fa-newspaper-o"></i></h1>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel">
                <div class="panel-body">
                    <h3>Kegiatan</h3>
                    <div class="row">
                        <div class="col-md-4">
                            <h3>{{$data['total_kegiatan']}} <p><small>Total</small></p></h3>
                        </div>
                        <div class="col-md-8">
                            <div class="pull-right" style="padding:0; margin:0;width : 50px; heigth : 50px;">
                                <h1><i class="fa fa-braille"></i></h1>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                

                <div class="panel-body">
                    <div class="page-heading">  
                        <div class="row">
                            <div class="col-md-7">
                                <center><h3>5 Postingan Teratas</h3></center>
                                <table class="table table-hover">
                                    
                                    <tr>
                                        <th style="width:10%; text-align:center;">No</th>
                                        <th style="text-align:center;">Postingan</th>
                                        <th style="text-align:center;">Bagian</th>                                        
                                        <th style="text-align:center;"></th>                                        
                                    </tr>
                                    <?php $i=0; ?>
                                    @forelse ($post_terakhir as $post)
                                        <tr>    
                                            <td align="center">{{$i+1}}</td>
                                            <td align="center">{{$post->title}}</td>
                                            <td align="center"><span class="label label-primary">{{$post->kategori}}</span></td>
                                            <td align="center">{{$i+1}}</td>
                                        </tr>
                                        <?php $i++; ?>
                                    @empty
                                        <tr>
                                            <td colspan="4" align="center">Tidak Ada Data</td>
                                        </tr>
                                    @endforelse
                                    
                                </table>
                            </div>
                            <div class="col-md-5" >
                                <center><h3>Organisasi Terakhir Ditambahkan</h3></center>
                                <table class="table table-hover">
                                    <tr>
                                        <th style="width:10%; text-align:center;">No</th>
                                        <th style="text-align:center;">Nama Organisasi</th>
                                        <th style="text-align:center;">Jenis</th>                                                                                     
                                    </tr>
                                    <?php $i=0; ?>
                                    @forelse ($data_organisasi as $organisasi)
                                        <tr>
                                            <td align="center">{{$i+1}}</td>
                                            <td align="center">{{$organisasi->nama}}</td>
                                            <td align="center"><span>{{$organisasi->jenis_organisasi}}</span></td>
                                        </tr>
                                        <?php $i++ ?>
                                    @empty
                                        <tr>
                                            <td colspan="3">Tidak Ada Data</td>
                                        </tr>
                                    @endforelse
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</script>
@endsection
