<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!session()->has('logged') && ($request->path() != 'login2')){
            return redirect('login2')->with('fail', 'សូមធ្វើការ Login ជាមុនសិន');
        }
        if(session()->has('logged') && ($request->path() =='login2')){
            return back();    
        }
        return $next($request)->header('Cache-Control', 'no-store', 'max-age=0', 'must-revalidate')
        ->header('pragma', 'no-cache')
        ->header('Expires', 'Sat 01 Jan 1990 00:00:00 GMT');
    }
}
