<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href="{{url('css/style.css')}}" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <title></title>
  </head>
  <body>
    @include('layouts.nav')
    <div class="two_wrapper">
     <img alt="portgolio" src="../image/pic<?php echo $pdt->id; ?>.jpg">

        <form  method="post" action="{{route('addc',$pdt->id)}}">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="two">
               <p>{{$pdt->product_name}}</p>
                <p><b>{{$pdt->price}}</b></p>
                <select class="select" name="quantity">
                  <option value="1" selected="selected">1</option>
                  <option value="2">2</option>
                  <option value="2">3</option>
                </select>
                <!-- <a href="{{route('addc',$pdt->id)}}">Add to cart</a> -->
              <button type="submit" name="button">Add to cart</button>
          </div>
        </form>
     </div>
  </body>
</html>
