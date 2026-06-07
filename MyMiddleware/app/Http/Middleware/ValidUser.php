<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class ValidUser
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        echo "This is ValidUser Middleware <br>";

        if(Auth::check()){
            return $next($request);
        }else{
            return redirect()->route('login');
        }
    }

    /* This code is for role based auth check with middleware, here we are passing role as parameter in middleware and checking in handle method
    public function handle(Request $request, Closure $next, string $role Response
    {
        echo "This is ValidUser Middleware <br>";

        if(Auth::check() && Auth::user()->role == $role){
            return $next($request);
        }else{
            return redirect()->route('login');
        }
    }
    */


    // This middleware is for terminate method, this method will be executed after response is sent to the browser, hence we can use this method for logging or any other task which we want to perform after response is sent to the browser
    public function terminate(Request $request, Response $response): void
    {
        echo "This is Terminate Method of ValidUser Middleware <br>";
    }
}
