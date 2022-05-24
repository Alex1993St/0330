<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirectIfNotKeyExist
{
    /**
     * Checked is key exist
     *
     * @param Request $request
     * @param Closure $next
     * @param ...$guards
     * @return mixed|void
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        if (session()->has('key')) {
            return $next($request);
        }
        abort(403);
    }
}
