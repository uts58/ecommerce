<!doctype>
<html>

<head>

  <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{url('css/style.css')}}">
</head>


  <body>



@include('layouts.nav')
<form method="post">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
             <h2 class="header1"> Edit profile</h2>
	<table class="table">
		<tr>
			<td>Name</td>
			<td><input type="text" class="form-control" name="name" value="{{$detail->name}}"></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" class="form-control" name="uname" value="{{$detail->uname}}"></td>
		</tr><tr>

			<td>Email</td>
			<td><input type="text" class="form-control" name="email" value="{{$detail->email}}"></td>
		</tr><tr>
			<td>Phone</td>
			<td><input type="text" class="form-control" name="phone" value="{{$detail->phone}}"></td>
		</tr><tr>
			<td>Address</td>
			<td><input type="text" class="form-control" name="address" value="{{$detail->address}}"></td>
		</tr>
          <tr>
        <td><input type="submit"  class="btn btn-success" value="save"></td>
          </tr>
             </table>
        </form>

</body>
</html>
