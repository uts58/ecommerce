<!doctype>
<html>

<head>

  <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{url('css/style.css')}}">
</head>


  <body>



@include('layouts.nav')

<div class="col-md-12 form-group">
  @if(Session::has('message'))
  <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
  @endif
</div>
<form method="post">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
             <h2 class="header1"> Edit profile</h2>
	<table class="table">
		<tr>
			<td>Name</td>
			<td><input type="text" class="form-control" name="name" value="{{$seller->name}}"></td>
		</tr>
		<tr>
			<td>licence</td>
			<td><input type="text" class="form-control" name="licence" value="{{$seller->licence}}"></td>
		</tr>


    <tr>
      <td>password</td>
      <td><input type="text" class="form-control" name="password" value="{{$seller->password}}"></td>
    </tr>


    <tr>

			<td>Email</td>
			<td><input type="text" class="form-control" name="email" value="{{$seller->email}}"></td>
		</tr><tr>
			<td>Phone</td>
			<td><input type="text" class="form-control" name="phone" value="{{$seller->phone}}"></td>
		</tr><tr>
			<td>Address</td>
			<td><input type="text" class="form-control" name="address" value="{{$seller->address}}"></td>
		</tr>
          <tr>
        <td><input type="submit"  class="btn btn-success" value="save"></td>
          </tr>
        <tr>
            @include('layouts.error')
        </tr>
             </table>
        </form>

</body>
</html>
