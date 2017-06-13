@extends('layouts.home_template')

@section('content')
<style>
    canvas {
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
        
    }
</style>
<div class="panel panel-default">
    <div class="panel-body">
        <div class="page-heading">
            <div class="row">
                <div class="col-md-5" >
                    <center><h3>Informasi User</h3></center>
                    <table class="table">
                        <tr>
                            <td width="30%">NPM</td>
                            <td width="5%" align="center">:</td>
                            <td>{{$user->npm}}</td>
                        </tr>
                        <tr>
                            <td width="30%">Nama User</td>
                            <td width="5%" align="center">:</td>
                            <td>{{$user->nama}}</td>
                        </tr>
                        <tr>
                            <td width="30%">Email</td>
                            <td width="5%" align="center">:</td>
                            <td>{{$user->email}}</td>
                        </tr>
                        <tr>
                            <td width="30%">Tipe User</td>
                            <td width="5%" align="center">:</td>
                            <td><span class="label label-primary">{{$user->tipe}}</span></td>
                        </tr>
                    </table>
                </div>
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

            </div>
        </div>
    </div>
</div>
@endsection
