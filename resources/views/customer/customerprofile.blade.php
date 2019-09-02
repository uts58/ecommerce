<!doctype>
<html>

<head>

  <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{url('css/style.css')}}">
</head>


  <body>
    @include('layouts.nav')
    <h2 class="header1"> Edit profile ||<a href="{{route('customer.edit',$customer->id)}}" class="btn btn-primary ">edit</a></h2>


    <table class="table">





        <tr>
          <td>ID</td>
          <td>{{$customer->id}}</td>


        </tr>

        <tr>
          <td>name</td>
          <td>{{$customer->name}}</td>


        </tr>


        <tr>
          <td>username</td>
          <td>{{$customer->uname}}</td>


        </tr>


        <tr>
          <td>Email</td>
          <td>{{$customer->email}}</td>


        </tr>


        <tr>
          <td>Addresss</td>
          <td>{{$customer->address}}</td>


        </tr>

        <tr>
          <td>phone</td>
          <td>{{$customer->phone}}</td>


        </tr>







    </table>


  </body>

</hmtl>
