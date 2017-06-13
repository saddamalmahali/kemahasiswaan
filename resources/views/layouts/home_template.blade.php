<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Moderna - Bootstrap 3 flat corporate template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="http://bootstraptaste.com" />
    <!-- css -->
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{url('css/fancybox/jquery.fancybox.css')}}" rel="stylesheet">
    <link href="{{url('css/jcarousel.css')}}" rel="stylesheet" />
    <link href="{{url('css/flexslider.css')}}" rel="stylesheet" />
    <link href="{{url('css/style.css')}}" rel="stylesheet" />

    <!-- Theme skin -->
    <link href="{{url('skins/default.css')}}" rel="stylesheet" />
    @yield('css')

    <!-- =======================================================
        Theme Name: Moderna
        Theme URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->

</head>
<body>
<div id="wrapper">
    <!-- start header -->
    <header>
        <div class="navbar navbar-default navbar-static-top ">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{url('/')}}"><span>KEMAHASISWAAN</span></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">


                        @if(!auth('client')->check() && !auth('web')->check())
                            <li class="active"><a href="{{url('/')}}">Home</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Organisasi <b class=" icon-angle-down"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{url('/')}}">Typography</a></li>
                                    <li><a href="{{url('/')}}">Components</a></li>
                                    <li><a href="{{url('/')}}">Pricing box</a></li>
                                </ul>
                            </li>
                            <li><a href="{{url('/')}}">Portfolio</a></li>
                            <li><a href="{{url('/')}}">Contact</a></li>
                            <li>
                                <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false"><i class="fa fa-key"></i> &nbsp;Login <b class=" icon-angle-down"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{url('/login')}}">Login Admin</a></li>
                                    <li><a href="{{url('/login_hima')}}">Login Organisasi</a></li>
                                </ul>
                            </li>
                        @elseif(auth('client')->check())
                            <li class="{{url()->full()==url('/') ? 'active' : ''}}"><a href="{{url('/')}}">Dasboard</a></li>
                            <li class="{{url()->full()==url('/list_kegiatan') ? 'active' : ''}}"><a href="{{url('/list_kegiatan')}}"><i class="fa fa-archive"></i>&nbsp; Kegiatan</a></li>
                            <li>
                                <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false"><i class="fa fa-user"></i>&nbsp{{auth('client')->user()->nama}}</a>
                                <ul class="dropdown-menu bg-primary">
                                    <li>
                                        <a href="{{url('/logout')}}" onclick="
                                            event.preventDefault();
                                            document.getElementById('form-logout').submit()"><i class="fa fa-sign-out"></i>&nbsp; &nbsp;Logout</a>
                                        <form id="form-logout" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->

    <section id="content">
        <div class="container">
            @if(!auth('client')->check() && !auth('web')->check())

                @yield('content')
            @endif

            @if(auth('client')->check())
                    <div class="row">
                        <div class="col-lg-8">
                            @yield('content')
                        </div>
                        <div class="col-lg-4">
                            <aside class="right-sidebar">
                                <div class="widget">
                                    <form class="form-search">
                                        <input class="form-control" type="text" placeholder="Search..">
                                    </form>
                                </div>
                                <div class="widget">
                                    <h5 class="widgetheading">Categories</h5>
                                    <ul class="cat">
                                        <li><i class="icon-angle-right"></i><a href="#">Web design</a><span> (20)</span></li>
                                        <li><i class="icon-angle-right"></i><a href="#">Online business</a><span> (11)</span></li>
                                        <li><i class="icon-angle-right"></i><a href="#">Marketing strategy</a><span> (9)</span></li>
                                        <li><i class="icon-angle-right"></i><a href="#">Technology</a><span> (12)</span></li>
                                        <li><i class="icon-angle-right"></i><a href="#">About finance</a><span> (18)</span></li>
                                    </ul>
                                </div>
                                <div class="widget">
                                    <h5 class="widgetheading">Latest posts</h5>
                                    <ul class="recent">
                                        <li>
                                            <img src="{{url('img/dummies/blog/65x65/thumb1.jpg')}}" class="pull-left" alt="" />
                                            <h6><a href="#">Lorem ipsum dolor sit</a></h6>
                                            <p>
                                                Mazim alienum appellantur eu cu ullum officiis pro pri
                                            </p>
                                        </li>
                                        <li>
                                            <a href="#"><img src="{{url('img/dummies/blog/65x65/thumb2.jpg')}}" class="pull-left" alt="" /></a>
                                            <h6><a href="#">Maiorum ponderum eum</a></h6>
                                            <p>
                                                Mazim alienum appellantur eu cu ullum officiis pro pri
                                            </p>
                                        </li>
                                        <li>
                                            <a href="#"><img src="{{url('img/dummies/blog/65x65/thumb3.jpg')}}" class="pull-left" alt="" /></a>
                                            <h6><a href="#">Et mei iusto dolorum</a></h6>
                                            <p>
                                                Mazim alienum appellantur eu cu ullum officiis pro pri
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="widget">
                                    <h5 class="widgetheading">Popular tags</h5>
                                    <ul class="tags">
                                        <li><a href="#">Web design</a></li>
                                        <li><a href="#">Trends</a></li>
                                        <li><a href="#">Technology</a></li>
                                        <li><a href="#">Internet</a></li>
                                        <li><a href="#">Tutorial</a></li>
                                        <li><a href="#">Development</a></li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                    </div>
            @endif

        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="widget">
                        <h5 class="widgetheading">Get in touch with us</h5>
                        <address>
                            <strong>Moderna company Inc</strong><br>
                            Modernbuilding suite V124, AB 01<br>
                            Someplace 16425 Earth </address>
                        <p>
                            <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891 <br>
                            <i class="icon-envelope-alt"></i> email@domainname.com
                        </p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget">
                        <h5 class="widgetheading">Pages</h5>
                        <ul class="link-list">
                            <li><a href="#">Press release</a></li>
                            <li><a href="#">Terms and conditions</a></li>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Career center</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget">
                        <h5 class="widgetheading">Latest posts</h5>
                        <ul class="link-list">
                            <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                            <li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
                            <li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget">
                        <h5 class="widgetheading">Flickr photostream</h5>
                        <div class="flickr_badge">
                            <script type="text/javascript" src="https://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>
                        </div>
                        <div class="clear">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="copyright">
                            <p>&copy; Moderna Theme. All right reserved.</p>
                            <div class="credits">
                                <!--
                                    All the links in the footer should remain intact.
                                    You can delete the links only if you purchased the pro version.
                                    Licensing information: https://bootstrapmade.com/license/
                                    Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Moderna
                                -->
                                <a href="https://bootstrapmade.com/">Free Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="social-network">
                            <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{url('js/jquery.js')}}"></script>
<script src="{{url('js/jquery.easing.1.3.js')}}"></script>
<script src="{{url('js/bootstrap.min.js')}}"></script>
<script src="{{url('js/jquery.fancybox.pack.js')}}"></script>
<script src="{{url('js/jquery.fancybox-media.js')}}"></script>
<script src="{{url('js/google-code-prettify/prettify.js')}}"></script>
<script src="{{url('js/portfolio/jquery.quicksand.js')}}"></script>
<script src="{{url('js/portfolio/setting.js')}}"></script>
<script src="{{url('js/jquery.flexslider.js')}}"></script>
<script src="{{url('js/animate.js')}}"></script>
<script src="{{url('js/custom.js')}}"></script>
@yield('script')
</body>
</html>