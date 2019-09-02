<!doctype html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="{{ asset('css/sweetalert2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <link href="{{url('css/style.css')}}" type="text/css" rel="stylesheet">
</head>
<body>
@include('layouts.nav')
<center>
    <h1>Orders</h1>
    <br>
    @include('layouts.error')
    <div class="col-md-12 form-group">
        @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif
    </div>
    <table class="table table-dark table-bordered" id="mytable">
        <tr>
            <th>
                Order ID
            </th>
            <th>
                Customer ID
            </th>
            <th>
                Product(1) Name
            </th>
            <th>
                Product(1) Quantity
            </th>
            <th>
                Product(2) Name
            </th>
            <th>
                Product(2) Quantity
            </th>
            <th>
                Product(3) Name
            </th>
            <th>
                Product(3) Quantity
            </th>
            <th>
                User Email
            </th>
            <th>
                Total Price
            </th>
            <th>
                Approved
            </th>
        </tr>
        @foreach($orders as $orders)
            @if($orders->status=="pending")
            <tr style="margin-left: 50px">
                <td>
                    {{$orders->id}}
                </td>
                <td>
                    {{$orders->customerid}}
                </td>
                <td>
                    @if($orders->product1==null) {{"Empty"}}@else{{$orders->product1}}@endif
                </td>
                <td>
                    @if($orders->quantity1==0) {{"Empty"}}@else{{$orders->quantity1}}@endif
                </td>
                <td>
                    @if($orders->product2==null) {{"Empty"}}@else{{$orders->product2}}@endif
                </td>
                <td>
                    @if($orders->quantity2==0) {{"Empty"}}@else{{$orders->quantity2}}@endif
                </td>
                <td>
                    @if($orders->product3==null) {{"Empty"}}@else{{$orders->product3}}@endif
                </td>
                <td>
                    @if($orders->quantity3==0) {{"Empty"}}@else{{$orders->quantity3}}@endif
                </td>
                <td>
                    {{$orders->email}}
                </td>
                <td>
                    {{$orders->total_price}}
                </td>
                <td>
                    <a href="{{route('adminController.approveCart', $orders->id )}}">approve</a>
                </td>
            </tr>
            @endif
        @endforeach
    </table>
</center>
</body>
</html>
