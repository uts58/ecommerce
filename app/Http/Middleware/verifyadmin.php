<?php

namespace App\Http\Middleware;

use Closure;

class
verifyadmin
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
      if($request->session()->get('access')!= 0){
          return redirect()->route('home');
      }
        return $next($request);
    }
}
