<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Session;

class SessionController extends Controller
{

    public function create(){
      return view('session.login');
    }

    public function login(Request $req){
      $this->validate(request(),[
        'uname' => 'required',
        'password' => 'required',

      ]);
      $user = DB::table('logins')->where('userName', request('uname'))
            ->where('password', request('password'))
            ->first();

      if ($user) {
        //customer redirect
        if($user->access ==1 ){

          $req->session()->put('id', $user->id);
          $req->session()->put('uname', $req->uname);
          $req->session()->put('access', $user->access);
      		//return redirect()->route('customer.home');

          return redirect()->route('home', ['id' => $user->id]);
      	}
        //seller redirect
        elseif ($user->access ==2 ) {

          $req->session()->put('id', $user->id);
          $req->session()->put('uname', $req->uname);
          $req->session()->put('access', $user->access);

          return redirect()->route('home', ['id' => $user->id]);
        }
        //admin redirect
        elseif ($user->access ==0 ) {

          $req->session()->put('id', $user->id);
          $req->session()->put('uname', $req->uname);
          $req->session()->put('access', $user->access);

          return redirect()->route('adminController.home');
        }
      }

      else{

        Session::flash('message', 'Invalide Username or Password!');
        Session::flash('alert-class', 'alert-danger');

            return redirect('/login');
            return view('login.index');
    	}

    }
    public function destroy(Request $req){

        $req->session()->flush();

        return redirect()->route('home');



    }


    public function home(){

        return redirect()->route('home');

    }


}
