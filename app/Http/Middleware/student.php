<?php

namespace App\Http\Middleware;

use App\Http\Controllers\User as Users ;
use App\Models\user ;
use Closure;
use Illuminate\Http\Request;

class student
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        
        if(session()->has('user')  && session('user')->role == 'student'){
        }
        else{
            return redirect('student');

        }
        return $next($request);
    }
}
