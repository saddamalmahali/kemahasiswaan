@extends('layouts.home_template')

@section('content')
    <div class="col-sm-9">
        <h2 align="center" style="margin-bottom:50px;">Selamat Datang di Situs Kemahasiswaan Sekolah Tinggi Teknologi Garut</h2>
        <!-- Feature Section -->

        <section id="feature" class="feature">
            <div class="features">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="item">
                            <div class="item-top">
                                <span class="feature-icon">
                                    <i class="fa fa-newspaper-o"></i>
                                </span><!-- /.feature-icon -->
                                <h3 class="item-title"><a href="{{url('/publikasi')}}">Kegiatan</a></h3>
                            </div><!-- /.item-top -->
                            <p class="item-description">
                                Memuat Informasi Kegiatan Setiap HIMA atau UKM di lingkungan Sekolah Tinggi Teknologi Garut
                            </p>
                        </div><!-- /.item -->
                    </div><!-- /.col-sm-4 -->

                    <div class="col-sm-4">
                        <div class="item">
                            <div class="item-top">
                                <span class="feature-icon">
                                    <i class="fa fa-cogs"></i>
                                </span><!-- /.feature-icon -->
                                <h3 class="item-title"><a href="{{url('/tentang')}}">Tentang</a></h3>
                            </div><!-- /.item-top -->
                            <p class="item-description">
                                Berisikan data informasi tentang pengembangan aplikasi
                            </p>
                        </div><!-- /.item -->
                    </div><!-- /.col-sm-4 -->

                    <div class="col-sm-4">
                        <div class="item">
                            <div class="item-top">
                                <span class="feature-icon">
                                    <i class="fa fa-group"></i>
                                </span><!-- /.feature-icon -->
                                <h3 class="item-title"><a href="{{url('organisasi_kemahasiswaan')}}">Profil Organisasi</a></h3>
                            </div><!-- /.item-top -->
                            <p class="item-description">
                                Berisikan tentang Data - Data Organisasi dibawah naungan Sekolah Tinggi Teknologi Garut
                            </p>
                        </div><!-- /.item -->
                    </div><!-- /.col-sm-4 -->
                </div><!-- /.row -->
            </div><!-- /.features -->
        </section><!-- /#features -->

        <!-- Feature Section End -->

        



        <!-- Latest Blog Post Section -->

        <section id="latest-post" class="latest-post">
            <h2 class="section-title"><span></span>Latest Blog Post</h2>
            <div class="slide-nav-container pull-right">
                <span class="slide-left slide-nav left" data-target="#post-slider" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></span>
                <span class="slide-right slide-nav right" data-target="#post-slider" role="button" data-slide="next"><i class="fa fa-angle-right"></i></span>
            </div><!-- /.slide-nav-container -->
            <div class="post-area">
                <div class="row">	
                    <div id="post-slider" class="post-slider owl-carousel owl-theme">
                        @forelse ($data_post as $post)
                            <div class="item">
                                <article class="post">
                                    <div class="featured-image">
                                        <img class="img-responsive" src="{{url('/img').'/'.$post->gambar_header}}" data-at2x="images/home-blog/post1@2x.jpg" alt="post-image">
                                    </div><!-- /.featured-image -->
                                    <div class="post-meta">
                                        <div class="entry-meta">
                                            <span class="entry-date">
                                                <i class="meta-icon fa fa-calendar"></i>
                                                <time datetime="{{date('d-m-Y', strtotime($post->created_at))}}">{{date('d-m-Y', strtotime($post->created_at))}}</time> /
                                            </span>
                                            <span class="post-author">
                                                <i class="meta-icon fa fa-user"></i>
                                                <a href="#">{{$post->author->nama}} </a> /
                                            </span>
                                        </div><!-- /.entry-meta -->
                                    </div><!-- /.post-meta -->
                                    <div class="post-container">
                                        <h3 class="entry-title"><a href="#">{{$post->title}}</a></h3><!-- /.entry-title -->
                                        <p class="post-description">
                                            {!! substr($post->body, 0, 800) !!}
                                        </p>
                                    </div><!-- /.post-container -->

                                    <div class="btn-container default">
                                        <a class="btn btn-bg" href="{{url('/post').'/'.$post->id}}">Read More</a>
                                    </div><!-- /.btn-container -->
                                </article><!-- /.post -->
                            </div><!-- /.item -->
                        @empty
                            
                        @endforelse
                        

                        
                    </div><!-- /#post-slider -->
                </div><!-- /.row -->
            </div><!-- /.post-area -->
        </section><!-- /#latest-post -->

        <!-- Latest Blog Post Section End -->


        
        <footer id="footer-section">
            <div class="footer-section">
                <div class="col-sm-4">
                    <div class="widget widget_twitter_post">
                        <h3 class="widget-title"><span></span>Latest Organisasi</h3>
                        @forelse ($recent_organisasi as $organisasi)
                            <p class="tweet"><b>{{$organisasi->nama}}</b>-{{$organisasi->deskripsi}}</p>    
                        @empty
                            
                        @endforelse
                        
                    </div><!-- /.widget -->
                </div><!-- /.col-sm-4 -->

                <div class="col-sm-4">
                    <div class="widget widget_recent_post">
                        <h3 class="widget-title"><span></span>Recent Kegiatan</h3>
                        @forelse ($recent_post as $post)
                            <div class="recent-post">
                                <a class="recent-title" href="{{url('/post').'/'.$post->id}}">{{$post->title}}</a>
                                <p class="post-description">{!! substr($post->body, 0, 800) !!}</p>
                            </div><!-- /.recent-post -->	
                        @empty
                            
                        @endforelse
                        	
                    </div><!-- /.widget -->
                </div><!-- /.col-sm-4 -->

                
            </div><!-- /.footer-section -->
        </footer><!-- /#footer-seection -->
    </div><!-- /.col-sm-9 -->
@endsection