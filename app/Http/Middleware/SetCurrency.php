<?php

namespace App\Http\Middleware;

use Closure;

class SetCurrency
{
    public function handle($request, Closure $next)
    {
        if (request('change_currency')) {
            session()->put('currency', request('change_currency'));
            $language = request('change_currency');
        }else {
             $language = config('app.currency');
        }
        return $next($request);
    }
}
