<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="{{url('images/logo.png')}}" alt="company logo" /></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right custom-menu">

                @if(!auth('web')->check() && !auth('client')->check())
                    <li class="active"><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#meet-team">Team</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="single-post.html">Single</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="fa fa-key"></span>&nbsp;&nbsp;Login <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><span class=""></span>Login ADMIN</a></li>
                            <li><a href="{{url('/login_hima')}}">Login HIMA</a></li>
                        </ul>
                    </li>
                @endif

                @if(auth('client')->check())
                    <li class="{{url()->full() == url('/client/index') ? 'active': ''}}"><a href="#home">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="fa fa-user"></span>&nbsp;&nbsp;{{auth('client')->user()->nama}} <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('/logout')}}" onclick="event.preventDefault(); document.getElementById('logout').submit()"><span class=""></span>logout</a></li>
                        </ul>
                        <form id="logout" action="{{url('/logout')}}" method="post">
                            {{csrf_field()}}
                        </form>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>