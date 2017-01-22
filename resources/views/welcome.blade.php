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
                                Setiap
                            </p>
                        </div><!-- /.item -->
                    </div><!-- /.col-sm-4 -->

                    <div class="col-sm-4">
                        <div class="item">
                            <div class="item-top">
                                <span class="feature-icon">
                                    <i class="fa fa-cogs"></i>
                                </span><!-- /.feature-icon -->
                                <h3 class="item-title"><a href="feature.html">Galeri</a></h3>
                            </div><!-- /.item-top -->
                            <p class="item-description">
                                Are you fear about coding? You don’t know code to customize it as you need. Color variation and other customization make it easy to choose your own color and design. 
                            </p>
                        </div><!-- /.item -->
                    </div><!-- /.col-sm-4 -->

                    <div class="col-sm-4">
                        <div class="item">
                            <div class="item-top">
                                <span class="feature-icon">
                                    <i class="fa fa-group"></i>
                                </span><!-- /.feature-icon -->
                                <h3 class="item-title"><a href="feature.html">Profil Organisasi</a></h3>
                            </div><!-- /.item-top -->
                            <p class="item-description">
                                Minimal Design Template is faster than other. Don't think that Minimal Design is just White design. Minimal Design can provide your necessary things for your Business. 
                            </p>
                        </div><!-- /.item -->
                    </div><!-- /.col-sm-4 -->
                </div><!-- /.row -->
            </div><!-- /.features -->
        </section><!-- /#features -->

        <!-- Feature Section End -->

        <!-- Our Works -->

        <section id="our-works" class="our-works">
            <h2 class="section-title"><span></span>Our Recent Works</h2>
            <div class="slide-nav-container pull-right">
                <a class="slide-nav left slide-left post-prev" data-slide="post-prev"><i class="fa fa-angle-left"></i></a>
                <a class="slide-nav right slide-right post-next" data-slide="post-next"><i class="fa fa-angle-right"></i></a>
            </div><!-- /.slide-nav-container -->
            <div class="works">
                <div class="row">
                    <div id="works-slider"  class="works-slider text-center owl-carousel owl-theme">

                        <figure class="html-code grid-of-images">
                            <div class="item-image effect-oscar">
                                <img class="img-responsive" src="images/our-works/work1.jpg" data-at2x="images/our-works/work1@2x.jpg" alt="work-image">
                                <a class="image-popup-vertical-fit" href="images/our-works/work1@2x.jpg">
                                    <span class="zoom">	
                                    </span>
                                </a>
                            </div><!-- /.item-image -->
                            <figcaption>
                                <div class="work-details">
                                    <h3 class="item-title"><a href="our-works.html">HTML5 Project </a></h3>
                                    <span class="work-catagory">
                                        HTML
                                    </span><!-- /.work-catagory -->
                                </div><!-- /.work-details -->
                            </figcaption><!-- /.work-details -->
                        </figure>

                        <figure class="html-code grid-of-images">
                            <div class="item-image effect-oscar">
                                <img class="img-responsive" src="images/our-works/work2.jpg" data-at2x="images/our-works/work2@2x.jpg" alt="work-image">
                                <a class="image-popup-vertical-fit" href="images/our-works/work2@2x.jpg">
                                    <span class="zoom">	
                                    </span>
                                </a>
                            </div><!-- /.item-image -->
                            <figcaption>
                                <div class="work-details">
                                    <h3 class="item-title"><a href="our-works.html">CSS Project</a></h3>
                                    <span class="work-catagory">
                                        CSS
                                    </span><!-- /.work-catagory -->
                                </div><!-- /.work-details -->
                            </figcaption><!-- /.work-details -->
                        </figure>

                        <figure class="html-code grid-of-images">
                            <div class="item-image effect-oscar">
                                <img class="img-responsive" src="images/our-works/work3.jpg" data-at2x="images/our-works/work3@2x.jpg" alt="work-image">
                                <a class="image-popup-vertical-fit" href="images/our-works/work3@2x.jpg">
                                    <span class="zoom">	
                                    </span>
                                </a>
                            </div><!-- /.item-image -->
                            <figcaption>
                                <div class="work-details">
                                    <h3 class="item-title"><a href="our-works.html">Bootstrap Project</a></h3>
                                    <span class="work-catagory">
                                        Typography
                                    </span><!-- /.work-catagory -->
                                </div><!-- /.work-details -->
                            </figcaption><!-- /.work-details -->
                        </figure>

                        <figure class="html-code grid-of-images">
                            <div class="item-image effect-oscar">
                                <img class="img-responsive" src="images/our-works/work4.jpg" data-at2x="images/our-works/work4@2x.jpg" alt="work-image">
                                <a class="image-popup-vertical-fit" href="images/our-works/work4@2x.jpg">
                                    <span class="zoom">	
                                    </span>
                                </a>
                            </div><!-- /.item-image -->
                            <figcaption>
                                <div class="work-details">
                                    <h3 class="item-title"><a href="our-works.html">WordPress Project</a></h3>
                                    <span class="work-catagory">
                                        WordPress
                                    </span><!-- /.work-catagory -->
                                </div><!-- /.work-details -->
                            </figcaption><!-- /.work-details -->
                        </figure>

                        <figure class="html-code grid-of-images">
                            <div class="item-image effect-oscar">
                                <img class="img-responsive" src="images/our-works/work5.jpg" data-at2x="images/our-works/work5@2x.jpg" alt="work-image">
                                <a class="image-popup-vertical-fit" href="images/our-works/work5@2x.jpg">
                                    <span class="zoom">	
                                    </span>
                                </a>
                            </div><!-- /.item-image -->
                            <figcaption>
                                <div class="work-details">
                                    <h3 class="item-title"><a href="our-works.html">Joomla Project</a></h3>
                                    <span class="work-catagory">
                                        Joomla
                                    </span><!-- /.work-catagory -->
                                </div><!-- /.work-details -->
                            </figcaption><!-- /.work-details -->
                        </figure>

                        <figure class="html-code grid-of-images">
                            <div class="item-image effect-oscar">
                                <img class="img-responsive" src="images/our-works/work6.jpg" data-at2x="images/our-works/work6@2x.jpg" alt="work-image">
                                <a class="image-popup-vertical-fit" href="images/our-works/work6@2x.jpg">
                                    <span class="zoom">	
                                    </span>
                                </a>
                            </div><!-- /.item-image -->
                            <figcaption>
                                <div class="work-details">
                                    <h3 class="item-title"><a href="our-works.html">Drupal Project</a></h3>
                                    <span class="work-catagory">
                                        Drupal
                                    </span><!-- /.work-catagory -->
                                </div><!-- /.work-details -->
                            </figcaption><!-- /.work-details -->
                        </figure>

                        <figure class="html-code grid-of-images">
                            <div class="item-image effect-oscar">
                                <img class="img-responsive" src="images/our-works/work7.jpg" data-at2x="images/our-works/work7@2x.jpg" alt="work-image">
                                <a class="image-popup-vertical-fit" href="images/our-works/work7@2x.jpg">
                                    <span class="zoom">	
                                    </span>
                                </a>
                            </div><!-- /.item-image -->
                            <figcaption>
                                <div class="work-details">
                                    <h3 class="item-title"><a href="our-works.html">Magento Project</a></h3>
                                    <span class="work-catagory">
                                        Magento
                                    </span><!-- /.work-catagory -->
                                </div><!-- /.work-details -->
                            </figcaption><!-- /.work-details -->
                        </figure>

                        <figure class="html-code grid-of-images">
                            <div class="item-image effect-oscar">
                                <img class="img-responsive" src="images/our-works/work8.jpg" data-at2x="images/our-works/work8@2x.jpg" alt="work-image">
                                <a class="image-popup-vertical-fit" href="images/our-works/work8@2x.jpg">
                                    <span class="zoom">	
                                    </span>
                                </a>
                            </div><!-- /.item-image -->
                            <figcaption>
                                <div class="work-details">
                                    <h3 class="item-title"><a href="our-works.html">Foundation</a></h3>
                                    <span class="work-catagory">
                                        Foundation
                                    </span><!-- /.work-catagory -->
                                </div><!-- /.work-details -->
                            </figcaption><!-- /.work-details -->
                        </figure>
                    </div><!-- /#works-slider -->
                </div>
            </div><!-- /.works -->
        </section><!-- /#our-works -->

        <!-- Our Works End -->



        



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
                        <h3 class="widget-title"><span></span>Latest Tweet</h3>
                        <p class="tweet">We just Going to publish our own CMS. We hope that this will change your life. <a href="#">http://ow.ly/tCRDE</a></p>
                        <p class="tweet">We are working for build some necessary WP plugin which are really effective for SEO and helps you to rank into search engine. <a href="#">http://ow.ly/tCRDE</a></p>
                    </div><!-- /.widget -->
                </div><!-- /.col-sm-4 -->

                <div class="col-sm-4">
                    <div class="widget widget_recent_post">
                        <h3 class="widget-title"><span></span>Recent Posts</h3>
                        <div class="recent-post">
                            <a class="recent-title" href="#">Type Code With Sunglass </a>
                            <p class="post-description">We like to do Coding after put sunglass. We know that much light of laptop can harm us.</p>
                        </div><!-- /.recent-post -->
                        <div class="recent-post">
                            <a class="recent-title" href="#">Sunglass Save Us Outside Also </a>
                            <p class="post-description">We take our sunglass when we go out. We have to take care of our eye so that sunglass is very necessary for us.</p>
                        </div><!-- /.recent-post -->			
                    </div><!-- /.widget -->
                </div><!-- /.col-sm-4 -->

                
            </div><!-- /.footer-section -->
        </footer><!-- /#footer-seection -->
    </div><!-- /.col-sm-9 -->
@endsection