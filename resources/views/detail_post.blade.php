@extends('layouts.home_template')
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

                        


                        <!-- Leave Comment -->

                        <div id="leave-comment" class="clearfix leave-comment">
                            <div class="wrapper">
                                <h3 class="title">Leave a Comment</h3>
                                <div id="respond">
                                    <form action="#" method="post" id="commentform">
                                        <input id="author" class="respond-author" name="author" type="text" placeholder="Your Name" value="" required>
                                        <input id="email" class="respond-email" name="email" type="email" placeholder="Your Email" value="" required>
                                        <input id="url" class="respond-url" name="url" type="url" placeholder="URL" value="">
                                        <textarea id="comment" class="respond-comment large" name="comment" placeholder="Comment" rows="6" required></textarea>
                                        <div class="default">
                                            <button name="submit" class="btn btn-bg" type="submit" id="submit">Submit</button>
                                        </div><!-- /.default -->
                                    </form><!-- /#commentform -->
                                </div><!-- /#respond -->
                            </div><!-- /#leave-comment -->
                        </div><!-- /.wrapper -->
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

                <div class="col-sm-4">
                    <div class="widget widget_dribble">
                        <h3 class="widget-title"><span></span>Dribble Shots</h3>
                        <div class="dribble-shots widget_img">
                            <a href="#"><img src="images/dribble/shot1.jpg" data-at2x="images/dribble/shot1@2x.jpg" alt="dribble-image">
                                <span></span>
                            </a>
                            <a href="#"><img src="images/dribble/shot2.jpg" data-at2x="images/dribble/shot2@2x.jpg" alt="dribble-image">
                                <span></span>
                            </a>
                            <a href="#"><img src="images/dribble/shot3.jpg" data-at2x="images/dribble/shot3@2x.jpg" alt="dribble-image">
                                <span></span>
                            </a>
                            <a href="#"><img src="images/dribble/shot4.jpg" data-at2x="images/dribble/shot4@2x.jpg" alt="dribble-image">
                                <span></span>
                            </a>
                            <a href="#"><img src="images/dribble/shot5.jpg" data-at2x="images/dribble/shot5@2x.jpg" alt="dribble-image">
                                <span></span>
                            </a>
                            <a href="#"><img src="images/dribble/shot6.jpg" data-at2x="images/dribble/shot6@2x.jpg" alt="dribble-image">
                                <span></span>
                            </a>
                        </div><!-- /.shots -->
                    </div><!-- /.widget -->
                </div><!-- /.col-sm-4 -->
            </div><!-- /.footer-section -->
        </footer><!-- /#footer-seection -->
    </div><!-- /.col-sm-9 -->
@endsection