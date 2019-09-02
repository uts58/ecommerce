<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Input;
use Illuminate\Http\Request;

use App\product;
use App\cart;
use App\order;
use App\customer;
use DB;

class CustomerController extends Controller
{
    public function index()
    {
        return redirect()->route('home');
    }


    public function add(Request $req, $id)
    {

        $product = product::find($id);

        $quantity = request('quantity');

        $price = $product->price * $quantity;


        $cart = new cart;
        $cart->cid = $req->session()->get('id');
        $cart->pid = $id;
        $cart->product_name = $product->product_name;
        $cart->quantity = $quantity;
        $cart->total_price = $price;
        $cart->save();


        return redirect()->route('cart', $id);

    }

    public function profile()
    {

    }

    public function show()
    {
        $id = request()->id;
        $products = product::find($id);

        return view('customer.item')->with('pdt', $products);

    }


    //Cart
    public function cart(Request $req)
    {

        $cid = $req->session()->get('id');
        $get = DB::table('carts')->where('cid', $cid)->get();

        return view('customer.cart')->with('cart', $get);

    }

    public function cartDelete($id)
    {
        $cart = cart::find($id);
        $cart->delete();

        return redirect()->route('cart');
    }

    public function order(Request $req)
    {
        $cid = $req->session()->get('id');
        $cart = DB::table('carts')->where('cid', $cid)->get();
        $user = DB::table('customers')->where('id', $cid)->first();
        $i = 0;
        $total = 0;
        $product[0] = null;
        $product[1] = null;
        $product[2] = null;
        $quantity[0] = 0;
        $quantity[1] = 0;
        $quantity[2] = 0;

        foreach ($cart as $cart) {
            $product[$i] = $cart->product_name;
            $quantity[$i] = $cart->quantity;
            $total = $total + $cart->total_price;
            $i = $i + 1;
        }

        $order = new order;

        $order->customerid = $cid;
        $order->product1 = $product[0];
        $order->quantity1 = $quantity[0];

        $order->product2 = $product[1];
        $order->quantity2 = $quantity[1];

        $order->product3 = $product[2];
        $order->quantity3 = $quantity[2];

        $order->total_price = $total;
        $order->mobile = $user->phone;
        $order->email = $user->email;
        $order->status = 'pending';

        $order->save();

        for($i=0;$i<3;$i++){
            if($product[$i]!=null){
                $products=product::where('product_name', $product[$i])->first();
                $products->hits+=1;
                $products->save();
            }
        }

//        $products=product::where('product_name', $product[0])->first();
//        $products->hits+=1;
//        $products->save();
//        $products=product::where('product_name', $product[1])->first();
//        $products[0]->hits+=1;
//        $products->save();
//        $products=product::where('product_name', $product[2])->first();
//        $products[0]->hits+=1;
//        $products->save();

        return redirect()->route('home');


    }

    public function cprofile(Request $req)
    {


        $cid = $req->session()->get('id');
        $customer = customer::Find($cid);

        return view('customer.customerprofile')->with('customer', $customer);


    }

    public function editcustomer($id)
    {

        $edit = DB::table('customers')->where('id', $id)->first();

        return view('customer.customeredit')->with('detail', $edit);

    }

    public function updateedited(Request $req, $id)
    {
        $this->validate(request(), [
            'name' => 'required',
            'uname' => 'required',
            'uname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',

        ]);
        $update = customer::find($id);
        $update->name = $req->name;
        $update->uname = $req->uname;


        $update->email = $req->email;
        $update->phone = $req->phone;

        $update->Save();

//           $cart = cart::find($id)->get();
//           $cart->delete();

        $cid = $req->session()->get('id');
        $customer = DB::table('customers')->where('id', $cid)->first();

        return view('customer.customerprofile')->with('customer', $customer);


    }


}
