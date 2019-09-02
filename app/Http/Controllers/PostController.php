<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\product;

class PostController extends Controller
{
    public function index(){

      $products=product::all();

      return view('customer.home')->with('product',$products);
    }
}
