






<html>
<head>


    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('css/style.css')}}">

</head>


    <body>
    @include('layouts.nav')
    <form method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="simple-login-container">
    <h2>Login Form</h2>
    <div class="row">
        <div class="col-md-12 form-group">
            <input type="text" class="form-control" placeholder="Username" id="uname" name="uname">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 form-group">
            <input type="password" placeholder="Enter your Password" class="form-control"  id="password" name="password" value="">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 form-group">
          @if(Session::has('message'))
          <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
          @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 form-group">
            <input type="submit" class="btn btn-block btn-login" value="login"  >
        </div>
    </div>

</div>

        </form>

    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <script src="{{url('js/jquery-3.1.1.min.js')}}"></script>

    </body>


</html>



























<!--
            <div class="col-sm-8">
              <h1>LOGIN</h1>
            </div>
            <form method="POST" action="/login" >
              {{csrf_field() }}

              <div class="form-group">
                <label for="username">User Name:</label>
                <input type="text" class="form-control" id="uname" name="uname" value="">
              </div>

              <div class="form-group">
                <label for="password">password:</label>
                <input type="password" class="form-control" id="password" name="password" value="">


              <div class="form-group">
                <button type="submit" name="btn btb-primary">Login</button>
              </div>

              <div class="form-goup">
                @include('layouts.error')
              </div>

            </form>
        </div>
-->
