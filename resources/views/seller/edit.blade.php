


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
        <table class="table">
          <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Rating</th>
            <th>Type</th>
            <th>Action</th>
          </tr>
          @foreach($product as $pdt)
            <tr>
              <td>{{$pdt->id}}</td>
              <td>{{$pdt->product_name}}</td>
              <td>{{$pdt->quantity}}</td>
              <td>{{$pdt->price}}</td>
              <td>{{$pdt->rating}}</td>
              <td>{{$pdt->type}}</td>
                <!-- <td><a href="{{route('editproduct',$pdt->id)}}">edit</a></td> -->
            </tr>
          @endforeach
        </table>

        <form method="post">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">


          <h1 class="header1">edit Products</h1>
        	<table class="table">
            <tr>
        			<td>Product Id</td>
        			<td> <input type="text" class="form-control" id="ename" name="id" value=""></td>
        		</tr>
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



      </div>
    </body>
    </html>
