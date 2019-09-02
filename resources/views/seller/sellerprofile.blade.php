<!doctype>
<html>

<head>

  <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{url('css/style.css')}}">
</head>


  <body>
    @include('layouts.nav')
    <h2 class="header1"> Edit profile ||<a href="{{route('seller.edit',$seller->id)}}" class="btn btn-primary ">edit</a></h2>


    <table class="table">





        <tr>
          <td>ID</td>
          <td>{{$seller->id}}</td>


        </tr>

        <tr>
          <td>name</td>
          <td>{{$seller->name}}</td>


        </tr>


        <tr>
          <td>licence</td>
          <td>{{$seller->licence}}</td>


        </tr>


        <tr>
          <td>Email</td>
          <td>{{$seller->email}}</td>


        </tr>


        <tr>
          <td>Addresss</td>
          <td>{{$seller->address}}</td>


        </tr>

        <tr>
          <td>phone</td>
          <td>{{$seller->phone}}</td>


        </tr>
        <tr>
          <td>status</td>
          <td>{{$seller->status}}</td>


        </tr>







    </table>


  </body>

</hmtl>
