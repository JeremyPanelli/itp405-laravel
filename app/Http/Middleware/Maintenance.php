<?php

namespace App\Http\Middleware;
use DB;

use Closure;

class Maintenance
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
        $configTable = DB::table('configs')->where('name', '=', 'maintenance')->get();
        if($configTable[0]->value == 'off')
        {
          return $next($request);
        }
        else {
          return redirect('/maintenance');
        }
    }
}
