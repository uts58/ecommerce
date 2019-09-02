


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
              <th>Product Name</th>
              <th>Quantity</th>
              <th>Total Price</th>
            </tr>
            @foreach($cart as $cart)
              <tr>
                <td>{{$cart->product_name}}</td>
                <td>{{$cart->quantity}}</td>
                <td>{{$cart->total_price}}</td>
                <td> <a class="btn btn-danger" href="{{route('cartDelete',$cart->id)}}">Cancel</a> </td>
              </tr>
            @endforeach
          </table>
          <a class="btn btn-success" href="{{route('order')}}">Order</a>




      </div>
    </body>
    </html>
