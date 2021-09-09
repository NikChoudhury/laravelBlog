<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserCheck
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
        // Value Of blance will get from url (http://127.0.0.1:8000/?blance=2000)
        if ($request->blance>1000) {
            return redirect('denied');
        }
        return $next($request);
    }
}
