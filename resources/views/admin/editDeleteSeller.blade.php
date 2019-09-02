<!doctype html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit/Delete Seller</title>
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
    <h1>Edit/Delete Sellers</h1>
    <br>
    <div class="col-md-12 form-group">
        @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif
    </div>
    <table class="table table-dark table-bordered">
        <tr>
            <th>
                ID
            </th>
            <th>
                Name
            </th>
            <th>
                License
            </th>
            <th>
                Email
            </th>
            <th>
                Phone No
            </th>
            <th>
                Address
            </th>
            <th>
                Created at
            </th>
            <th>
                Updated at
            </th>
            <th>
                Status
            </th>
            <th>
                Edit/ Delete
            </th>
        </tr>
        @foreach($sellers as $sellers)
                <tr style="margin-left: 50px">
                    <td>
                        {{$sellers->id}}
                    </td>
                    <td>
                        {{$sellers->name}}
                    </td>
                    <td>
                        {{$sellers->licence}}
                    </td>
                    <td>
                        {{$sellers->email}}
                    </td>
                    <td>
                        {{$sellers->phone}}
                    </td>
                    <td>
                        {{$sellers->address}}
                    </td>
                    <td>
                        {{$sellers->created_at}}
                    </td>
                    <td>
                        {{$sellers->updated_at}}
                    </td>
                    <td>
                        {{$sellers->status}}
                    </td>
                    <td>
                        <a href="{{route('adminController.editSeller', $sellers->id )}}">Edit</a>&nbsp/
                        <a href="{{route('adminController.deleteSeller', $sellers->id )}}" onclick="return confirm('Delete entry?')">Delete</a>
                    </td>
                </tr>
        @endforeach
    </table>
</center>
</body>
</html>
