


<!doctype html>

<html>
<head>


    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('css/style.css')}}">


</head>


<html>
    <body>


    @include('layouts.nav')

    <div class="col-md-12 form-group">
        @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif
    </div>

      <div class="container">
        @if($seller->status == 'approved')
        <h1 class="header1">Your Products</h1>
        <table class="table">
          <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Rating</th>
            <th>Type</th>
          </tr>
          @foreach($product as $pdt)
            <tr>
              <td>{{$pdt->id}}</td>
              <td>{{$pdt->product_name}}</td>
              <td>{{$pdt->quantity}}</td>
              <td>{{$pdt->price}}</td>
              <td>{{$pdt->rating}}</td>
              <td>{{$pdt->type}}</td>
            </tr>
          @endforeach
        </table>

        <form method="post">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">


          <h1 class="header1">Add Products</h1>
        	<table class="table">
            <tr>
        			<td>Product Name</td>
        			<td> <input type="text" class="form-control" id="pname" name="pname" value=""></td>
        		</tr>

        		<tr>
        			<td>Quantity</td>
        			<td><input type="text" class="form-control" id="quantity" name="quantity" value=""></td>
        		</tr><tr>
        			<td>Price</td>
        			<td><input type="text" class="form-control" id="price" name="price" value=""></td>
        		</tr><tr>
        			<td>Rating</td>
        			<td><input type="text" class="form-control" id="rating" name="rating" value=""></td>
        		</tr><tr>
        			<td>Type</td>
        			<td><input type="text" class="form-control" id="type" name="type" value=""></td>
        		</tr>
            <tr>
                <td></td>
                <td><input type="submit"  class="btn btn-success" value="save"></td>
            </tr>

                <tr>
                    @include('layouts.error')
                </tr>
          </table>
        </form>

          @elseif($seller->status == 'disapproved')
              <h1 class="header1">Your Account has been deactivated, contact admin for more info</h1>
            @else
        <h1 class="header1">SORRY! You are not Authorized to add or sell product. Wait for admins APPROVAL!</h1>
        @endif
      </div>
    </body>
    </html>
