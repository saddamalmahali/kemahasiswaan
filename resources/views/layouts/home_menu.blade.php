<aside id="main-menu">
    <div class="menu-area">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="toggle-icon"><i class="fa fa-bars"></i></span>
            </button> <!-- /.navbar-toggle -->
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="{{url('img/sttgkemahasiswaan.png')}}" alt="Site Logo">
            </a><!-- /.navbar-brand -->
        </div><!-- /.navbar-header -->

        <div id="menu" class="menu collapse navbar-collapse" role="navigation">
            <nav id="headernavigation" class="nav navbar-nav">
                <!-- Main navigation -->
                <ul>
                    <li class="{{url()->full() == url('/') ? 'active' : ''}}"><a href="{{url('/')}}">Home</a></li>
                    
                    <li> <a href="shortcode.html">Organisasi Kemahasiswaan</a></li>
                    <li><a href="contact.html">Contact</a></li>

                    <li><div class="default"></div></li>
                </ul> <!-- /.nav .navbar-nav -->
                
            </nav> <!-- /.navbar-collapse  -->
            
        </div><!-- /#menu -->
    </div><!-- /.menu-area -->
    
    <div class="menu-bottom ">
        <div class="row" style="text-align:center;">
            <div class="col-md-12 green">
                <div class="default"><a href="{{url('/login')}}" class="btn btn-right" style="width:100%;"><span class="fa fa-key"></span> &nbsp; Login Admin</a></div>
            </div>
        </div>
        <div class="row" style="text-align:center; margin-top:10px;">
            <div class="col-md-12 red">
                <div class="default"><a href="{{url('/login_hima')}}" class="btn btn-right" style="width:100%;"><span class="fa fa-key"></span> &nbsp; Login HIMA&UKM</a></div>
            </div>
        </div>
        
        <div class="copyright">
            &copy; <a href="#">Febriansyah & RI ZAL DI </a> {{date('Y')}}
        </div><!-- /.copy-right -->
    </div><!-- /.menu-bottom -->
</aside><!-- /#main-menu -->