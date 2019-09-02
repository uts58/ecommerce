<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\seller;
use App\product;

class SellerController extends Controller
{
    public function index()
    {
        return redirect()->route('home');
    }


    //show products ,add, edit
    public function add(Request $req)
    {
        $id = $req->session()->get('id');
        $get = DB::table('products')->where('sellerid', $id)->get();
        $seller = DB::table('sellers')->where('id', $id)->first();
        return view('seller.add')->with('product', $get)->with('seller', $seller);

    }


    public function store(Request $req)
    {

        $this->validate(request(), [
            'pname' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'rating' => 'required|numeric',
            'type' => 'required',

        ]);

        $product = new product();
        $product->sellerid = $req->session()->get('id');
        $product->product_name = request('pname');
        $product->quantity = request('quantity');
        $product->price = request('price');
        $product->rating = request('rating');
        $product->type = request('type');
        $product->featured = 0;
        $product->sellCount = 0;
        $product->hits = 0;
        $product->save();

        return redirect()->route('add');

    }

    public function profile(Request $req)
    {
        $sid = $req->session()->get('id');
        $seller = seller::Find($sid);

        return view('seller.sellerprofile')->with('seller', $seller);

    }

    public function editseller($id)
    {

        $seller = DB::table('sellers')->where('id', $id)->first();

        return view('seller.selleredit')->with('seller', $seller);

    }

    public function updatesellerprof(Request $req, $id)
    {
        //  $update = DB::table('customer')->where('id',$id)->first();

        $this->validate(request(), [
            'name' => 'required',
            'licence' => 'required',
            'password' => 'required|min:6',
            'email' => 'required|email|unique:sellers',
            'phone' => 'required|numeric|digits:11',
            'address' => 'required',

        ]);


        $update = seller::find($id);
        $update->name = $req->name;
        $update->licence = $req->licence;
        $update->password = $req->password;
        $update->address = $req->address;
        $update->email = $req->email;
        $update->phone = $req->phone;

        $update->Save();

        $sid = $req->session()->get('id');
        $seller = DB::table('sellers')->where('id', $sid)->first();

        return view('seller.sellerprofile')->with('seller', $seller);


    }


    public function edit(Request $req)
    {
        $id = $req->session()->get('id');
        $get = DB::table('products')->where('sellerid', $id)->get();
        return view('seller.edit')->with('product', $get);

    }


    public function update(Request $req)
    {
        $id = request('id');

        $this->validate(request(), [
            'pname' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'rating' => 'required',
            'type' => 'required',

        ]);

        $product = product::find($id);

        $product->product_name = request('pname');
        $product->quantity = request('quantity');
        $product->price = request('price');
        $product->rating = request('rating');
        $product->type = request('type');

        $product->save();
        return redirect()->route('edit');

    }
}
