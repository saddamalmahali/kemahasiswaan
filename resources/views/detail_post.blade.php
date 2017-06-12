@extends('1home_template.blade.php.backup')
@section('content')
    <div class="col-sm-9">
					
        <!-- Page Heading Section -->

        <section id="single-page" class="single-page">
            <div id="single-slide" class="single-slider carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="{{url('/img').'/'.$post->gambar_header}}" alt="slider-image">
                    </div>
                    
                </div>

               
            </div>


            <!-- Single post -->

            <div id="single-post" class="single-post">
                <div class="col-sm-4">
                    <div class="row">
                        <div class="post-meta">
                            <div class="entry-meta">
                                <span class="entry-date">
                                    <time datetime="{{date('d-m-Y', strtotime($post->created_at))}}">{{date('d-m-Y', strtotime($post->created_at))}}</time> 
                                    <i class="meta-icon fa fa-calendar"></i>
                                </span>
                                <span class="post-author">
                                    <a href="#">{{$post->author->nama}} </a><i class="meta-icon fa fa-user"></i>
                                </span>
                                <span>
                                    <a href="#">{{$post->kategori}}</a>
                                    <i class="meta-icon fa fa-tags"></i>
                                </span>
                            </div><!-- /.entry-meta -->
                        </div><!-- /.post-meta -->

                    </div><!-- /.row -->
                </div><!-- /.col-sm-3 -->

                <div class="post-details col-sm-8">
                    <div class="row">
                        <article class="single-post-text">
                            <h3 class="post-title">{{$post->title}}</h3>
                            {!!$post->body!!}
                        </article><!-- /.single-post-text -->

                        
                    </div><!-- /#leave-comment -->
                    <!-- Leave Comment End -->
                </div><!-- /.post-dtails -->
            </div><!-- /#single-post -->	
        </section><!-- /#single-page -->
        <!-- Single Page End -->

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