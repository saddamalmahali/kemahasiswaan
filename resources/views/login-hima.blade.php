
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="../../favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <!-- Bootstrap core CSS -->
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('css/patros.css')}}" rel="stylesheet">
    <link href="{{url('font-awesome/css/font-awesome.css')}}" rel="stylesheet">



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h4 class="panel-title"><span class="fa fa-key"></span>&nbsp;&nbsp;LOGIN APLIKASI</h4>
            </div>
            <div class="panel-body">
              <form class="inline" action="{{url('/login_hima')}}" method="POST">
                {{ csrf_field() }}
                <div align="center"><img src="{{url('img/logo.png')}}" width="100" height="100"></div>
                <h2 class="form-signin-heading" align="center"><b>Kemahasiswaan </b><p><small>Sistem Informasi Kemahasiswaan</small></p> </h2> <br />
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <label for="inputEmail" class="sr-only">Email address</label>
                  <input type="email" id="inputEmail" name="email" class="form-control custom-labels" placeholder="Email address" required autofocus>
                  @if ($errors->has('email'))
                    <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
                  @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                  <label for="inputPassword" class="sr-only">Password</label>
                  <input type="password" id="inputPassword" name="password" class="form-control custom-labels inverse" placeholder="Password" required>
                  @if ($errors->has('password'))
                    <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
              </span>
                  @endif
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="remember-me"> Remember me
                  </label>
                </div>
                <button class="btn btn-md btn-custom btn-noborder-radius" type="submit">Sign in</button>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div> <!-- /container -->
    <style>
      .container {
        padding-top: 25px;
      }
      .panel .panel-heading{
        background: #E96840 !important;
        border-color: #E96840 !important;
      }
      .panel {
        border-color: #E96840 !important;
      }
    </style>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{url('js/ie10-viewport-bug-workaround.js')}}"></script>
  </body>
</html>
