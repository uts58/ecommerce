


<!doctype html>

<html>
<head>


    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('css/style.css')}}">


</head>


<html>
    <body>


@include('layouts.nav')
<div class="container">

<form method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="col-md-12 form-group">
      @if(Session::has('message'))
      <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
      @endif
    </div>
     <div class="form-group header2">
        <label for="name">Sign in As:</label>
        <select class="" name="userType" >
          <option value="1" selected="selected">Customer</option>
          <option value="2">Seller</option>
        </select>
      </div>

	<table class="table">
		<tr>
			<td>Name</td>
			<td> <input type="text" class="form-control" id="name" name="name" value=""></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" class="form-control" id="uname" name="uname" value=""></td>
		</tr><tr>
			<td>Password</td>
			<td><input type="password" class="form-control" id="password" name="password" value=""></td>
		</tr><tr>
			<td>Confirm password</td>
			<td><input type="password" class="form-control" id="password_confirmation" name="password_confirmation" value=""></td>
		</tr><tr>
			<td>Email</td>
			<td><input type="text" class="form-control" id="email" name="email" value=""></td>
		</tr><tr>
			<td>Phone</td>
			<td><input type="text" class="form-control" id="phone" name="phone" value=""></td>
		</tr><tr>
			<td>Address</td>
			<td><input type="text" class="form-control" id="address" name="address" value=""></td>
		</tr>
    <tr>
			@include('layouts.error')
		</tr>
          <tr>
        <td></td>
        <td><input type="submit"  class="btn btn-success" value="save"></td>
          </tr>
             </table>
        </form>



        </div>
    </body>
    </html>
