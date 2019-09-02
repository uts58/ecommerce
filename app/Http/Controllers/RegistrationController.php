<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use DB;
use Session;

use App\customer;
use App\seller;
use App\login;

class RegistrationController extends Controller
{
    public function create(){
      return view('session.create');
    }

    public function store(){

      //validate
      $this->validate(request(),[
        'name' => 'required|min:3',
        'uname' => 'required|min:3',
        'email' => 'required|email|unique:customers',
        'email' => 'required|email|unique:sellers',
        'phone' => 'required|numeric|digits:11',
        'address' => 'required',
        'password' => 'required|confirmed|min:6',
        'password_confirmation' => 'required',

      ]);

      //create and save
      $email = request(['email']);
      $uname = request(['uname']);
      $password = request(['password']);
      $id=0;
      $access=request('userType');

      if ($access == 1) {
        $user = customer::create(request(['name','uname','password','email','phone','address']));

        $get = DB::table('customers')->where('email', $email)->first();
        $id = $get->id;
        $qry = 'insert into logins (id,userName,password, access) values ("'.$id.'","'.request('uname').'","'.request('password').'",'.$access.')';
        $login = DB::select($qry);
          Session::flash('message', 'DONE!');
          Session::flash('alert-class', 'alert-success');
      }else {
        $seller = new seller();
        $seller->name = request('name');
        $seller->licence = 'no';
        $seller->email = request('email');
        $seller->phone = request('phone');
        $seller->password = request('password');
        $seller->address = request('address');
        $seller->status = 'pending';

        $seller->save();

        $get = DB::table('sellers')->where('email', $email)->first();
        $id = $get->id;
        $qry = 'insert into logins (id,userName,password, access) values ("'.$id.'","'.request('uname').'","'.request('password').'",'.$access.')';
        $login = DB::select($qry);
        Session::flash('message', 'DONE!');
        Session::flash('alert-class', 'alert-success');
      }





      // redirect
       return redirect()->route('register');
    }
}
