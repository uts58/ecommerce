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
    <h1>Statistics</h1>
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
                ID
            </th>
            <th>
                Product Name
            </th>
            <th>
                Price
            </th>
            <th>
                Sells Count
            </th>
            <th>
                Hit
            </th>
            <th>
                Rating
            </th>
            <th>
                Type
            </th>
            <th>
                Featured
            </th>
            <th>
                Seller Name
            </th>
            <th>
                Delete
            </th>
        </tr>
        @foreach($products as $products)
            <tr style="margin-left: 50px">
                <td>
                    {{$products->id}}
                </td>
                <td>
                    {{$products->product_name}}
                </td>
                <td>
                    {{$products->price}}
                </td>
                <td>
                    {{$products->sellCount}}
                </td>
                <td>
                    {{$products->hits}}
                </td>
                <td>
                    @if($products->rating<2)
                        <span class="fa fa-star checked"></span>
                    @elseif($products->rating<3)
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    @elseif($products->rating<4)
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    @elseif($products->rating<5)
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    @elseif($products->rating=5)
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    @else
                        <span class="fa fa-star"></span>
                    @endif

                </td>
                <td>
                    {{$products->type}}
                </td>
                <td>
                    <a href="{{route('adminController.isFeatured', $products->id )}}">Yes</a>&nbsp/
                    <a href="{{route('adminController.isNotFeatured', $products->id )}}">No</a>&nbsp
                    @if($products->featured==1)(Featured)
                    @endif
                </td>
                <td>
                    {{$products->sellername}}
                </td>
                <td>
                    <a href="{{route('adminController.deleteProduct', $products->id )}}"onclick="return confirm('Delete entry?')">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
</center>

</body>
</html>
