<?php

namespace App\Http\Controllers;

use App\product;
use App\seller;
use App\order;
use Illuminate\Http\Request;
use Session;

class adminController extends Controller
{
    public function index()
    {
        return view('admin.adminPanel');
    }

    public function sellerApproval()
    {
        $sellers = seller::all();
        echo "&nbsp";
        return view('admin.sellerApproval')->with('sellers', $sellers);
    }

    public function makeSellerValid($id)
    {
        $sellers = seller::find($id);
        $status = "approved";
        $sellers->status = $status;
        $sellers->save();
        Session::flash('message', 'Approved!');
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('adminController.sellerApproval');
    }

    public function makeSellerInvalid($id)
    {
        $sellers = seller::find($id);
        $sellers->status = "disapproved";
        $sellers->save();
        Session::flash('message', 'Disapproved!');
        Session::flash('alert-class', 'alert-danger');
        return redirect()->route('adminController.sellerApproval');
    }

    public function editDeleteSeller()
    {
        $sellers = seller::all();
        echo "&nbsp";
        return view('admin.editDeleteSeller')->with('sellers', $sellers);
    }

    public function editSeller($id)
    {
        $sellers = seller::find($id);
        echo "&nbsp";
        return view('admin.editSeller')->with('sellers', $sellers);
    }

    public function deleteSeller($id)
    {
        $sellers = seller::destroy($id);
        Session::flash('message', 'DELETED!');
        Session::flash('alert-class', 'alert-danger');
        return redirect()->route('adminController.editDeleteSeller');
    }

    public function updateSeller(Request $request)
    {

        $this->validate(request(), [
            'name' => 'required|min:3',
            'licence' => 'required|min:2',
            'email' => 'required|email',
            'phone' => 'required|numeric|digits:11',
            'address' => 'required',
        ]);

        $sellers = seller::find($request->id);
        $sellers->name = $request->name;
        $sellers->licence = $request->licence;
        $sellers->email = $request->email;
        $sellers->phone = $request->phone;
        $sellers->address = $request->address;
        $sellers->status = $request->status;
        $sellers->save();
        Session::flash('message', 'DONE!');
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('adminController.editDeleteSeller');
    }

//    public function showProducts(){
//        $products=product::all();
//        echo "&nbsp";
//        return view('admin.showProducts')->with('products', $products);
//    }


    public function statistics()
    {
        $products = product::all()->sortByDesc('hits');
        $sellers = seller::all();
        for ($i = 0; $i < count($products); $i++) {
            $highest = 0;
            if ($products[$i]->hits > $highest) {
                $highestName = $products[$i]->product_name;
            }
            for ($j = 0; $j < count($sellers); $j++) {
                if ($products[$i]->sellerid == $sellers[$j]->id) {
                    $products[$i]->sellername = $sellers[$j]->name;
                }
            }
        }
        echo "&nbsp";
        return view('admin.showStatus')->with('products', $products);
    }

    public function isFeatured($id)
    {
        $products = product::find($id);
        $products->featured = 1;
        $products->save();
        Session::flash('message', 'Product is now Featured!');
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('adminController.statistics');
    }

    public function isNotFeatured($id)
    {
        $products = product::find($id);
        $products->featured = 0;
        $products->save();
        Session::flash('message', 'Product is not Featured anymore!');
        Session::flash('alert-class', 'alert-danger');
        return redirect()->route('adminController.statistics');
    }

    public function deleteProduct($id)
    {
        $products = product::destroy($id);
        Session::flash('message', 'Product Deleted!');
        Session::flash('alert-class', 'alert-danger');
        return redirect()->route('adminController.statistics');
    }

    public function viewCarts()
    {
        $orders = order::all();
        echo "&nbsp";
        return view('admin.viewCarts')->with('orders', $orders);
    }

    public function approveCart($id)
    {
        $orders = order::find($id);
        $orders->status = "approved";
        $orders->save();

        if ($orders->product1 != null) {
            $products = product::where('product_name', $orders->product1)->first();
            $products->sellCount = $products->sellCount + $orders->quantity1;
            $products->save();
        }
        if ($orders->product2 != null) {
            $products = product::where('product_name', $orders->product2)->first();
            $products->sellCount = $products->sellCount + $orders->quantity2;
            $products->save();
        }
        if ($orders->product3 != null) {
            $products = product::where('product_name', $orders->product3)->first();
            $products->sellCount = $products->sellCount + $orders->quantity3;
            $products->save();
        }

        Session::flash('message', 'Order Approved!');
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('adminController.viewCarts');
    }
}
