<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Str;

class HttpsProtocol
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->secure()) {
            return redirect(Str::replaceFirst('https', 'http', $request->getRequestUri()));
        }


        return $next($request);
    }
}
