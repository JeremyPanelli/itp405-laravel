<?php
<<<<<<< HEAD
namespace App\Http\Middleware;
use Closure;
use Auth;
=======

namespace App\Http\Middleware;

use Closure;
use Auth;

>>>>>>> itp-405-laravel
class Authenticated
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
<<<<<<< HEAD
        if(Auth::check()) {
            return $next($request);
        } else {
            return redirect('/login');
        }
=======
      if(Auth::check()){
        return $next($request);
      }
      else {
        return redirect('/login');
      }
>>>>>>> itp-405-laravel
    }
}
