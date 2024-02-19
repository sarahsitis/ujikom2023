<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class LoginCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $rules): Response
    {
        // $user =  Auth::user();

        // if(!Auth::check()){
        //     return redirect('login');
        // }
        if(auth()->user()->role == $rules) {
            return $next($request);
        }

        // return response()->json(['you dont have permission']);

        return back()->with('error',"you don't have permissin");
    }
}
