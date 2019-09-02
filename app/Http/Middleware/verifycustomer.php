<?php

namespace App\Http\Middleware;

use Closure;

class verifycustomer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      if($request->session()->get('access')!= 1){
        if ($request->session()->get('access')!= 0) {
          return redirect()->route('home');
        }else {
          return redirect()->route('adminController.home');
        }
      }
        return $next($request);
    }
}
