@extends('layouts.home_template')
@section('content')
    <div class="row">
        <div class="col-md-9">
            <section id="page-heading" class='page-heading page-heading-v1'>
                <h1 class="page-title">Organisasi Kemahasiswaan</h1>
                <p class="page-description">Organisasi Kemahasiswaan HIMA & UKM <p>dibawah lingkungan Sekolah Tinggi Teknologi Garut</p></p>
            </section><!-- /#page-heading -->
            <br />
            <br />

            <section id="feature" class="feature">
                <div class="features">
                    <div class="row">
                        @forelse ($data_organisasi as $organisasi)
                            <div class="col-sm-4">
                                <div class="item">
                                    <div class="item-top">
                                        <span class="feature-icon">
                                            <img src="{{url('/img').'/'.$organisasi->logo}}">
                                        </span><!-- /.feature-icon -->
                                        <h3 class="item-title">{{$organisasi->nama}}</h3>
                                    </div><!-- /.item-top -->
                                    <p class="item-description">
                                        <table class="table">
                                            <tr>
                                                <td>Nama Organisasi</td>
                                                <td>:</td>
                                                <td>{{$organisasi->nama}}</td>
                                            </tr>
                                            <tr>
                                                <td>Tahun Berdiri</td>
                                                <td>:</td>
                                                <td>{{$organisasi->tahun_berdiri}}</td>
                                            </tr>
                                            
                                        </table>
                                        <br />
                                        <p>{{$organisasi->deskripsi}}</p>
                                    </p>
                                </div><!-- /.item -->
                            </div><!-- /.col-sm-4 -->
                        @empty
                            
                        @endforelse
                        
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection