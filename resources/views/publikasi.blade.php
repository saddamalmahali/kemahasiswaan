@extends('1home_template.blade.php.backup')
@section('content')
    <!-- Page Heading Section -->
<div class="col-md-9">
    <section id="page-heading" class='page-heading page-heading-v1'>
        <h1 class="page-title">Publikasi</h1>
        <p class="page-description">Publikasi Tentang Kegiatan - Kegiatan HIMA & UKM <p>dibawah lingkungan Sekolah Tinggi Teknologi Garut</p></p>
    </section><!-- /#page-heading -->
    <br />
    @forelse ($data_post as $post)
        <article class="blog-post">
            <div class="row">
                <div class="col-sm-6">
                    <div class="text-content">
                        <h3 class="post-title"><a href="{{url('/post').'/'.$post->id}}">{{$post->title}}</a></h3>
                        <div class="post-meta">
                            <div class="entry-meta">
                                <span class="entry-date">
                                    <i class="meta-icon fa fa-calendar"></i>
                                    <time datetime="{{date('d-m-Y', strtotime($post->created_at))}}">{{date('d-m-Y', strtotime($post->created_at))}}</time> /
                                </span>
                                <span class="post-author">
                                    <i class="meta-icon fa fa-user"></i>
                                    <a href="#">{{$post->author->nama}} </a>  / 
                                </span>
                                <span>
                                    <a href="#">{{$post->kategori}}</a>
                                    <i class="meta-icon fa fa-tags"></i>
                                </span>
                            </div><!-- /.entry-meta -->
                        </div><!-- /.post-meta -->
                        <p>{!!substr($post->body, 0, 500)!!}</p>

                        <div class="btn-container default">
                            <a class="btn btn-bg" href="{{url('/post').'/'.$post->id}}">Read On</a>
                        </div><!-- /.btn-container -->
                    </div><!-- /.text-content -->
                </div><!-- /.col-sm-6 -->
                <div class="col-sm-6">
                    <div class="media-content">
                        <div class="post-image">
                            <img src="{{url('/img').'/'.$post->gambar_header}}" class="img img-responsive" alt="post-image" width="410" height="250">
                        </div><!-- /.post-image -->
                    </div><!-- /.media-content -->					
                </div><!-- /.col-sm-6 -->
            </div><!-- /.row -->
        </article><!-- /#blog-post -->
    @empty
        <center><h4>Data Kosong</h4></center>
    @endforelse
    
    <div style="text-align:center">{{$data_post->links()}}</div>

    <!-- Post section End -->
</div><!-- /.col-sm-9 -->
@endsection